
# 📅 GmbfHospital

**GmbfHospital** is a comprehensive hospital management system that enables the admin team to efficiently manage patients, doctors, doctor availability, and much more. Doctors can easily access patient information, including medical records. Additionally, users can book appointments by calling the hospital's phone number.

---

## 🚀 Features

- **🔧 Admin Management:**
  - Manage patients, doctors, and doctor availability.
- **👨‍⚕️ Doctor Interface:**
  - Access patient information, including medical history.
- **📞 Appointment Booking:**
  - Users can book appointments by calling the hospital's phone number.
- **🔐 Role-Based Access:**
  - Admins and doctors have separate, tailored views.

---

## 🛠️ Installation

To set up the project locally, follow these steps:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/your-repository-url/gmbfhospital.git
   cd gmbfhospital
   ```

2. **Install dependencies:**

   ```bash
   composer install
   npm install
   ```

3. **Build assets:**

   ```bash
   npm run build
   ```

4. **Run the application:**

   ```bash
   php artisan serve
   ```

---

## 💻 Usage

- **Admin Access:** Admin users must have an email ending with `@gmbfhospital.com`. The admin panel is accessible via the `/admin` route.
- **Doctor Access:** Doctors can access their dashboard at the `/appointments` route.
- **Booking Slots:** Users can book appointment slots by calling the hospital's phone number.

---

## 🛠️ Technologies Used

- **Backend:** Laravel
- **Frontend:** Vue.js (with Inertia.js)
- **Admin Panel:** FilamentPHP
- **Database:** MySQL

---

## 🤝 Contributing

If you'd like to contribute to GmbfHospital, please fork the repository and submit a pull request. For major changes, please open an issue first to discuss what you would like to change.

---

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## 📧 Contact

For any inquiries, please contact the project maintainer at `minthantk642@gmail.com`.

---

Thank you for using **GmbfHospital**! We hope it serves your needs efficiently.
