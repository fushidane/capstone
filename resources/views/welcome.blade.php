<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Judson:wght@400;700&display=swap">
    <title>SALUS-ARMS</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fffefe;
        }

        /* Sidebar styles */
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #a8d5a3;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding-top: 20px;
            padding-left: 20px;
            margin-top: 80px;
        }

        .sidebarbutton {
            width: 90%;
            margin: 15px 0;
            padding: 10px;
            background-color: #ffffff00;
            border: none;
            border-radius: 5px;
            display: flex;
            align-items: center;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
        }

        .sidebarbutton:hover {
            background-color: #dddddd77;
        }

        .icon {
            width: 24px;
            height: 24px;
            margin-right: 12px;
            object-fit: contain;
            vertical-align: middle;
        }

        /* Top nav styles */
        .top-nav {
            height: 80px;
            width: 100%;
            background-color: rgb(255, 255, 255);
            position: fixed;
            top: 0;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .logo {
            width: 50px;
            height: 50px;
            background-image: url('https://scontent.fceb8-1.fna.fbcdn.net/v/t39.30808-6/455827514_122169380030207935_427310203209628303_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeFizxvwRroZXrRSd0QWAMVUQ77Dse7WbTtDvsOx7tZtO2i8MqPouElQ5bCBR1k6F9DajkpzvaokVXHWg2d0SKVK&_nc_ohc=icIDI1Y5qtEQ7kNvgF8HkYf&_nc_zt=23&_nc_ht=scontent.fceb8-1.fna&oh=00_AYCIul-4PLIFmRszw3g0DBtxxTc0efao2GqVDAAYvDPpCQ&oe=66C62836');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin-left: 40px;
        }

        .project-name {
            font-size: 24px;
            font-weight: 700;
            color: #000000;
            margin-left: 10px;
            font-family: 'Judson', serif;
        }

        .nav-left {
            display: flex;
            align-items: center;
        }

        .user-profile {
            position: relative;
            display: flex;
            align-items: center;
            cursor: pointer;
            z-index: 10;
            font-size: 20px;
        }

        .profile-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-image: url('https://cdn-icons-png.flaticon.com/128/64/64572.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin-left: 10px;
            margin-right: 90px;
        }

        /* Main content */
        .content {
            margin-left: 200px;
            padding: 20px;
            margin-top: 80px;
        }

        /* Media Queries for responsiveness */
        @media (max-width: 1024px) {
            .sidebar {
                width: 150px;
            }

            .top-nav {
                width: calc(100% - 150px);
            }

            .content {
                margin-left: 150px;
            }

            .sidebarbutton {
                font-size: 18px;
            }

            .project-name {
                font-size: 18px;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100px;
            }

            .top-nav {
                width: calc(100% - 100px);
            }

            .content {
                margin-left: 100px;
            }

            .sidebarbutton {
                font-size: 16px;
            }

            .icon {
                width: 20px;
                height: 20px;
            }

            .project-name {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
                flex-direction: row;
                justify-content: space-around;
                padding: 10px;
            }

            .top-nav {
                width: 100%;
                padding: 0 10px;
            }

            .content {
                margin-left: 0;
                margin-top: 140px;
            }

            .sidebarbutton {
                width: auto;
                margin: 5px 0;
                padding: 5px;
                font-size: 14px;
            }

            .icon {
                width: 18px;
                height: 18px;
            }

            .project-name {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <button class="sidebarbutton">
            <img src="https://cdn-icons-png.flaticon.com/128/1828/1828765.png" alt="Dashboard Icon" class="icon" />
            Dashboard
        </button>

        <button class="sidebarbutton">
            <img src="https://cdn-icons-png.flaticon.com/128/1960/1960242.png" alt="Logs Icon" class="icon" />
            Logs
        </button>

        <button class="sidebarbutton">
            <img src="https://cdn-icons-png.flaticon.com/128/9234/9234155.png" alt="Suggestions Icon" class="icon" />
            Suggestions
        </button>

        <button class="sidebarbutton">
            <img src="https://cdn-icons-png.flaticon.com/128/3068/3068327.png" alt="Students Icon" class="icon" />
            Students
        </button>

        <button class="sidebarbutton">
            <img src="https://cdn-icons-png.flaticon.com/128/2413/2413035.png" alt="Events Icon" class="icon" />
            Events
        </button>
    </div>

    <!-- Top Navigation -->
    <div class="top-nav">
        <div class="nav-left">
            <div class="logo"></div>
            <div class="project-name">SALUS-ARMS</div>
        </div>
        <div class="user-profile" onclick="toggleDropdown()">
            <span>Dane Cosicol</span>
            <div class="profile-icon"></div>
        </div>
    </div>


    <script>
        function toggleDropdown() {
            var userProfile = document.querySelector('.user-profile');
            userProfile.classList.toggle('active');
        }
    </script>
</body>
</html>
