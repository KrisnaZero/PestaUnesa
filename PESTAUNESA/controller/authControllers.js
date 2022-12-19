const User = require("../model/user");
const jwt = require("jsonwebtoken");

//handle errors
const handleErrors = (err) => {
  console.log(err.message, err.code);
  let errors = { email: "", password: "" };

  // email salah
  if (err.message === "Incorrect email") {
    errors.email = "That email is not registered";
  }

  // password salah
  if (err.message === "Incorrect password") {
    errors.password = "That password is incorrect";
  }

  // email sudah terdaftar
  if (err.code === 11000) {
    errors.email = "Email is already registered";
    return errors;
  }
  let errErrors = err.errors;

  // validasi error
  if (err.message.indexOf("user validation failed")) {
    Object.keys(errErrors || {}).forEach(({ properties }) => {
      console.log(properties);
      errors[properties.path] = properties.message;
    });
  }
  return errors;
  x;
};

// membuat json web token (JWT)
const maxAge = 3 * 24 * 60 * 60;
const createToken = (id) => {
  return jwt.sign({ id }, "pestaunesa user secret", {
    expiresIn: maxAge,
  });
};

// controller signup get
module.exports.signupGet = (req, res) => {
  res.render("auth/signup", { title: "Sign Up" });
};

// controller login get
module.exports.loginGet = (req, res) => {
  res.render("auth/login", { title: "Login" });
};

// controller signup post
module.exports.signupPost = async (req, res) => {
  const { username, email, password } = req.body;

  try {
    const user = await User.create({ username, email, password });
    const token = createToken(user._id);
    res.cookie("jwt", token, { httpOnly: true, maxAge: maxAge * 1000 });
    res.status(201).json({ user: user._id });
  } catch (err) {
    const errors = handleErrors(err);
    res.status(400).json({ errors });
  }
};
// controller login post
module.exports.loginPost = async (req, res) => {
  const { email, password } = req.body;

  try {
    const user = await User.login(email, password);
    const token = createToken(user._id);
    res.cookie("jwt", token, { httpOnly: true, maxAge: maxAge * 1000 });
    res.status(200).json({ user: user._id });
  } catch (err) {
    const errors = handleErrors(err);
    res.status(400).json({ errors });
  }
};

// controller logout get
module.exports.logoutGet = (req, res) => {
  res.cookie("jwt", "", { maxAge: 1 });
  res.redirect("/");
};
