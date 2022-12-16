require("dotenv").config();
const exspress = require("express");
const mongoose = require("mongoose");
const app = exspress();
const routes = require("./routes/routes");
const cookieParser = require("cookie-parser");
const { requireAuth, checkUser } = require("./middleware/authMiddleware");

//middleware
app.use(exspress.static("asset"));
app.use(exspress.json());
app.use(exspress.urlencoded());
app.use(cookieParser());

//view engine
app.set("view engine", "ejs");

//connect to mongoDB
console.log(process.env.DBURI);
const dbURI = process.env.DBURI;
const database = (module.exports = () => {
  const connectionParams = {
    useNewUrlParser: true,
    useUnifiedTopology: true,
  };
  try {
    mongoose.set("strictQuery", false);
    mongoose.connect(dbURI, connectionParams);
    console.log("Connected to Database");
  } catch (error) {
    console.log(error);
    console.log("Database connection failed");
  }
});

database();

app.get("*", checkUser);

// routes
app.use(routes);

app.listen(3000, () => {
  console.log("Server is runnning on port 3000");
});

// 404
// app.use((req, res) => {
//   res.status(404).render("404", { title: "404" });
// });
