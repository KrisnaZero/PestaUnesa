const mongoose = require("mongoose");
const bookingSchema = new mongoose.Schema(
  {
    name: {
      type: String,
      required: true,
    },
    bookingMulai: {
      type: String,
      require: true,
    },
    bookingSelesai: {
      type: String,
      require: true,
    },
    keperluan: {
      type: String,
      require: true,
    },
    asal: {
      type: String,
      require: true,
    },
    validation: {
      type: Boolean,
      default: false,
    },
  },
  {
    timestamps: true,
  }
);

const Booking = mongoose.model("booking", bookingSchema);
module.exports = Booking;
