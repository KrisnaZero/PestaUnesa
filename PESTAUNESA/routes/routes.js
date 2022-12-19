const { Router } = require("express");
const authController = require("../controller/authControllers");
const controller = require("../controller/controllers");
const { requireAuth, checkUser } = require("../middleware/authMiddleware");

const router = Router();

// login, signup dan logout routes
router.get("/signup", authController.signupGet);
router.post("/signup", authController.signupPost);
router.get("/login", authController.loginGet);
router.post("/login", authController.loginPost);
router.get("/logout", authController.logoutGet);

// semua routes, kecuali login, signup dan logout
router.get("/", controller.homepageGet);
router.get("/homepage", controller.homepageGetRedirect);
router.get("/informasi", controller.informasiGet);
router.get("/jadwal", controller.jadwalGet);
router.get("/jadwalAdmin", requireAuth, controller.jadwalAdminGet);
router.post("/jadwal/accept/:id", controller.jadwalAccept);
router.post("/jadwal/cancel/:id", controller.jadwalCancel);
router.get("/booking", requireAuth, controller.bookingGet);
router.post("/boooking/create/id", requireAuth, controller.bookingPost);
router.get("/booking/success/id", requireAuth, controller.bookingSuccess);
router.get("/about-us", controller.aboutUsGet);

router.get("/informasi/perbaikan-stadion", controller.perbaikanStadion);
router.get("/informasi/turnamen-U15", controller.turnamenU15);

module.exports = router;
