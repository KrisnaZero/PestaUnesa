const Booking = require("../model/booking");

module.exports.homepageGet = (req, res) => {
  res.render("index", { title: "Homepage" });
};
module.exports.homepageGetRedirect = (req, res) => {
  res.redirect("/");
};
module.exports.informasiGet = (req, res) => {
  res.render("informasi", { title: "Informasi" });
};
module.exports.jadwalGet = (req, res) => {
  Booking.find({}, (error, result) => {
    if (error) {
      console.log(error);
      console.log("ERROR");
    } else {
      res.render("jadwal", { title: "Jadwal", bookings: result });
    }
  });
};
module.exports.bookingGet = (req, res) => {
  res.render("service", { title: "Booking" });
};
module.exports.bookingPost = async (req, res) => {
  // Mengubah format date dari yyyy-mm-dd ke dd/mm/yyyy
  dateFormat = (date) => {
    const [year, month, day] = date.split("-");
    const result = [month, day, year].join("/");
    return result;
  };

  req.body.bookingMulai = dateFormat(req.body.bookingMulai);
  req.body.bookingSelesai = dateFormat(req.body.bookingSelesai);

  // Save data booking ke database
  try {
    const createBooking = new Booking(req.body);
    await createBooking.save();
    console.log(createBooking);
    console.log("Booking Sukses");
    res.redirect("/booking/success");
  } catch (error) {
    console.log(error);
  }
};
module.exports.bookingSuccess = (req, res) => {
  res.render("booking sukses", { title: "Booking Success" });
};
module.exports.aboutUsGet = (req, res) => {
  res.render("about", { title: "About Us" });
};
