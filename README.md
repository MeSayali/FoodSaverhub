
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
  
--👀SCREENSHOTS:-
  ![a69b95b5-dfb7-457e-879b-0625dffa058a](https://github.com/user-attachments/assets/8579b8e0-7335-4506-9f13-010d6ce3e55b)

  
![400dcb15-7aa7-4310-bb5e-0e7e1f5ef4d2](https://github.com/user-attachments/assets/f6b26a84-2399-4cca-a3b7-d1cb702d5322)


![7c21db32-8f5b-4f2a-9e4d-0aa1c2199817](https://github.com/user-attachments/assets/2464c9c3-8a0f-4e78-a322-4d3e2abf5764)


![995be0ed-295e-4340-bfbc-3228ac50a665](https://github.com/user-attachments/assets/d96ad6e9-3044-4630-a7a1-2d423d70efcb)


![8a61aabb-eec5-4466-a83f-22b8837dadf4](https://github.com/user-attachments/assets/eaaabbb7-c3b3-45d3-ad44-24c05885577b)


![188c7bcb-7aa1-43fa-ace1-3eca458a73cb](https://github.com/user-attachments/assets/bee6c5b8-254e-45a6-a9ab-a944fcc80195)

![79032e80-7674-40ed-aebe-bfd2ec9e87bd](https://github.com/user-attachments/assets/08e0dd6a-9f77-4862-a2ff-f51abe560135)

![59dc0f03-ff4b-4547-b2ce-f52cf78ff52f](https://github.com/user-attachments/assets/6983c811-536c-413e-9f58-ff9b4a39145e)

![4257a456-0c83-49a0-8668-2ec35f4c7606](https://github.com/user-attachments/assets/89a89b5a-392a-458d-b8a5-68313e3b8e03)

![188c7bcb-7aa1-43fa-ace1-3eca458a73cb](https://github.com/user-attachments/assets/c305ab59-99c4-4655-b9e6-12b5819f32ea)

![6746a622-183a-4985-9334-374413be276c](https://github.com/user-attachments/assets/d51e74f7-4d1a-4745-ba55-deac587bae2f)

![2790bf3d-72cc-4463-b8b2-549bf33999a3 (1)](https://github.com/user-attachments/assets/221d21da-08d3-42bc-9359-31a05a17a99f)

![7a66ef09-2094-4ac2-bfb3-2a7261fc4e2d (1)](https://github.com/user-attachments/assets/3204972a-7be1-4b7c-a175-fa27660442a0)

![eac51f7d-2a2e-40cd-8069-1f619c05db2c](https://github.com/user-attachments/assets/dbdac39a-4d74-4806-9488-68bec33308f1)

![2c91200f-84e2-49ab-900b-007254f5cb66](https://github.com/user-attachments/assets/e011dad3-bd65-49cf-995d-1429f670822e)

![2b03b3f8-3273-4e51-91d1-45a0c0876078](https://github.com/user-attachments/assets/e087266f-0717-4a74-9338-a6cc04cab5e3)

![ec1f00a3-a83e-44a1-9a34-147d7e497d1d](https://github.com/user-attachments/assets/73cd82bf-b018-4ec0-ac46-68bcb528d157)


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

