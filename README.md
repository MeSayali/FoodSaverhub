
# Food Saver Hub

## 📝 Abstract
This project is designed to manage food wastage effectively and provide food, clothing, and monetary aid to the needy. Every day, large amounts of food are wasted through hotels, restaurants, birthday parties, etc. Recognizing the potential to address this issue, **Food Saver Hub** offers an online solution to reduce food wastage. 

If anyone wishes to donate food, they can enter the item details and their basic information into the application. Donors can register themselves and, whenever they have excess food, log in and send a request to the admin. The admin maintains records of donors and beneficiaries (orphanages, poor people, etc.). After verifying a valid request, the admin notifies volunteers about the venue and time for food collection. Volunteers collect and distribute the items to the assigned beneficiaries and update the job completion status in the application.

This initiative not only tackles food waste but also addresses food poverty. Additionally, the project extends its services to clothing and monetary donations, which are highly appreciated by NGOs working towards similar causes.

### Key Modules:
- **Admin**
- **User**
- **Volunteer**

## 📖 Chapter 1: Introduction
**Food Saver Hub** is a platform to manage food wastage effectively and provide essential resources to those in need. In India, tons of edible food are wasted daily, while many people struggle to find their next meal. This project aims to bridge this gap by reducing food wastage and addressing food poverty through an online solution.

### User Module
The **User Module** is designed for individuals who wish to donate excess or leftover food, clothing, or money. Key functionalities include:
- **Register/Login**: Users can create an account and log in.
- **Donate**: Select the type and quantity of food or clothing to donate, or specify the amount of money.
- **View Donations**: Users can track their donation history.

### Admin Module
The **Admin Module** is designed for system administrators and NGOs to manage the donation process. Key functionalities include:
- **View and Manage Donations**: Admins can track food, clothing, and monetary donations.
- **Coordinate with NGOs**: List donations for NGOs to select based on their needs.
- **Assign Pickups**: Track which organizations have taken which donations and coordinate pickup requests with the delivery module.

### Volunteer Module
The **Volunteer Module** supports NGOs in the donation process by providing pickup and delivery services. Key functionalities include:
- **Register/Login**: Volunteers can register on the platform.
- **Pickup and Delivery**: View pickup and drop-off locations for donations.
- **Update Status**: Mark jobs as completed after successful delivery.

## 🌟 Features
- **Food Donation**: Accept and distribute excess food.
- **Clothing and Monetary Aid**: Extend support beyond food donations.
- **Efficient Coordination**: Streamlined communication between donors, admins, and volunteers.
- **Transparency**: Maintain confidential user details with separate accounts.

## 🛠️ Technologies Used
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: Python (Django Framework)
- **Database**: SQLite/MySQL
- **Version Control**: Git/GitHub
--ScreenShots:-
  ![a69b95b5-dfb7-457e-879b-0625dffa058a](https://github.com/user-attachments/assets/8579b8e0-7335-4506-9f13-010d6ce3e55b)

  
![400dcb15-7aa7-4310-bb5e-0e7e1f5ef4d2](https://github.com/user-attachments/assets/f6b26a84-2399-4cca-a3b7-d1cb702d5322)



## 🚀 How to Run the Project
1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/food-saver-hub.git
   ```
2. Navigate to the project directory:
   ```bash
   cd food-saver-hub
   ```
3. Create a virtual environment:
   ```bash
   python -m venv env
   ```
4. Activate the virtual environment:
   - For Windows:
     ```bash
     .\env\Scripts\activate
     ```
   - For Mac/Linux:
     ```bash
     source env/bin/activate
     ```
5. Install dependencies:
   ```bash
   pip install -r requirements.txt
   ```
6. Apply migrations:
   ```bash
   python manage.py migrate
   ```
7. Start the development server:
   ```bash
   python manage.py runserver
   ```
8. Access the application at `http://127.0.0.1:8000`.

## 📂 Folder Structure
```
food-saver-hub/
├── manage.py
├── food_saver_hub/
│   ├── settings.py
│   ├── urls.py
│   └── wsgi.py
├── templates/
│   ├── base.html
│   ├── user/
│   │   └── donate.html
│   ├── admin/
│   │   └── dashboard.html
│   └── volunteer/
│       └── tasks.html
├── static/
│   ├── css/
│   │   └── styles.css
│   ├── js/
│   │   └── scripts.js
│   └── images/
├── requirements.txt
└── README.md
```

## 🌍 Future Enhancements
- Add a chatbot for user assistance 🤖.
- Implement real-time tracking for volunteers 📍.
- Introduce reward points for donors 🏆.
- Expand services to multiple regions 🌎.

## 🤝 Contribution
We welcome contributions to improve **Food Saver Hub**! Follow these steps to contribute:
1. Fork the repository.
2. Create a new branch:
   ```bash
   git checkout -b feature-branch-name
   ```
3. Make your changes and commit them:
   ```bash
   git commit -m "Description of changes"
   ```
4. Push your changes:
   ```bash
   git push origin feature-branch-name
   ```
5. Create a pull request on GitHub.

## 📜 License
This project is licensed under the MIT License. See the `LICENSE` file for details.

## 📧 Contact
For any queries or suggestions, feel free to reach out:
- **Name**: Sayali Pawar
- **Email**: [your-email@example.com](mailto:your-email@example.com)
- **GitHub**: [https://github.com/yourusername](https://github.com/yourusername)

