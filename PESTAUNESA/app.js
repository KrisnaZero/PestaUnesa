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
const dbURI =
  "mongodb+srv://admin1:admin123@mylaundry.4krhzfc.mongodb.net/pestaUnesa?retryWrites=true&w=majority";
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

app.get("/", (req, res) => {
  res.render("index", { title: "Homepage" });
});

// routes
app.use(routes);

app.listen(3000, () => {
  console.log("Server is runnning on port 3000");
});

// 404
// app.use((req, res) => {
//   res.status(404).render("404", { title: "404" });
// });
