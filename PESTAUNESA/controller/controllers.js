const Booking = require("../model/booking");

//get homepage
module.exports.homepageGet = (req, res) => {
  res.render("index", { title: "Homepage" });
};
//redirect ke homepage
module.exports.homepageGetRedirect = (req, res) => {
  res.redirect("/");
};
//get laman informasi
module.exports.informasiGet = (req, res) => {
  res.render("informasi", { title: "Informasi" });
};
//get laman jadwal
module.exports.jadwalGet = (req, res) => {
  Booking.find({ validation: true }, (error, result) => {
    if (error) {
      console.log(error);
      console.log("ERROR");
    } else {
      res.render("jadwal", { title: "Jadwal", bookings: result });
    }
  });
};
//get laman jadwal Admin
module.exports.jadwalAdminGet = (req, res) => {
  Booking.find({}, (error, result) => {
    if (error) {
      console.log(error);
      console.log("ERROR");
    } else {
      res.render("jadwal", { title: "Jadwal", bookings: result });
    }
  });
};
//booking accept
module.exports.jadwalAccept = async (req, res) => {
  const item = await Booking.findById(req.params.id);
  item.validation = true;
  try {
    await item.save();
    console.log("Booking Accepted");
    res.redirect("/jadwalAdmin");
  } catch (error) {
    console.log(error);
  }
};
//booking cancel (delete)
module.exports.jadwalCancel = async (req, res) => {
  await Booking.findByIdAndDelete(req.params.id);
  console.log("Success Cancelled");
  res.redirect("/jadwalAdmin");
};
//get laman booking
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
//setelah create booking, menuju ke laman booking success
module.exports.bookingSuccess = (req, res) => {
  res.render("booking sukses", { title: "Booking Success" });
};
//get laman about us
module.exports.aboutUsGet = (req, res) => {
  res.render("about", { title: "About Us" });
};

//get laman perbaikan stadion
module.exports.perbaikanStadion = (req, res) => {
  res.render("perbaikanStadion", { title: "Perbaikan Stadion" });
};

//get laman turnamen U15
module.exports.turnamenU15 = (req, res) => {
  res.render("turnamenU15", { title: "Turnamen U15" });
};
