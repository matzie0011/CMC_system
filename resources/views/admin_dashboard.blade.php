<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General layout styles */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    display: flex;
    height: 100vh;
}


.combined-sidebar .logo img {
    width: 130px;
    height: auto;
}

.combined-sidebar ul {
    flex: 1;
    list-style: none;
    padding: 0;
    margin: 0;
}

.combined-sidebar ul li {
    margin: 10px 0;
}

.combined-sidebar ul li a {
    color: #fff;
    text-decoration: none;
    display: flex;
    align-items: center;
    padding: 10px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.combined-sidebar ul li a:hover {
    background: #333;
}

.combined-sidebar .fa {
    margin-right: 10px;
}



.dropdown-content li {
    margin: 0;
}

.dropdown-content li a {
    display: block;
    color: #fff;
    padding: 10px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.dropdown-content li a:hover {
    background-color: #333;
}

.dropdown:hover .dropdown-content {
    display: block;
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}
.dropdown-content {
    display: none; /* Keep it hidden by default */
}

.dropdown-content.show {
    display: block; /* Show when the 'show' class is added */
}

.logout-container {
    margin-top: auto; /* Pushes the logout button to the bottom */
}

.logout-btn {
    background: none;
    border: none;
    padding: 10px;
    margin: 0;
    cursor: pointer;
    color: #fff;
    width: 100%;
    text-align: left;
    font-size: 18px;
}

.logout-btn i {
    margin-right: 10px;
}


        .header-text {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-greet {
            display: flex;
            align-items: center;
        }

        .logout-btn {
            color: #fff;
            text-decoration: none;
            margin-left: 15px;
            font-size: 18px;
        }

        .combined-sidebar {
            background: #222;
            color: #fff;
            width: 230px;
            height: auto;
            padding: 20px;
            box-shadow: 2px 0 4px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
        }

     
        .search-input {
            width: calc(100% - 40px);
            padding: 8px;
            border: 1px solid #444;
            border-radius: 4px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        #search-btn-1 {
            background: #444;
            border: none;
            color: #fff;
            padding: 8px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .combined-sidebar li {
            list-style-type: none;
            margin: 10px 0;
        }

        .combined-sidebar li a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .combined-sidebar li a:hover {
            background: #333;
        }

        .combined-sidebar .fa {
            margin-right: 10px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #222;
            min-width: 200px;
            top: 100%;
            left: 0;
            list-style: none;
            padding: 0;
            margin: 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: opacity 0.4s ease, transform 0.4s ease, visibility 0.4s ease;
        }

        .dropdown-content li {
            margin: 0;
        }

        .dropdown-content li a {
            display: block;
            color: #fff;
            padding: 10px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .dropdown-content li a:hover {
            background-color: #333;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .center-content {
            flex-grow: 1;
            padding: 20px;
            overflow: auto;
        }

        .site-info {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .all-quick-info {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 20px;
            width: calc(33.333% - 20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            box-sizing: border-box;
        }

        .all-quick-info:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .info-icon {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .text-right {
            text-align: right;
        }

        .info-numbers span {
            font-size: 28px;
            font-weight: bold;
        }

        .info-box-footer {
            margin-top: 15px;
        }

        .info-box-footer a {
            color: #333;
            text-decoration: none;
            display: flex;
            justify-content: space-between;
        }

        .info-box-footer .pull-left {
            flex-grow: 1;
        }

        .info-box-footer .pull-right {
            color: #333;
        }

        .newest-members {
            margin-top: 30px;
        }

        .notifications {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        .notify-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .notify-header h2 {
            margin: 0;
        }

        .action-holder i {
            margin-left: 15px;
            font-size: 18px;
        }

        .notify-box table {
            width: 100%;
            border-collapse: collapse;
        }

        .notify-box table th,
        .notify-box table td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        .notify-box table th {
            background: #f9f9f9;
            text-align: left;
        }

        .view-all-members {
            margin-top: 20px;
        }

        .view-all-btn1 a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        /* General button styling */
        .actions-btns,
        .actions-btns2 {
            display: inline-block;
            padding: 5px;
            border-radius: 4px;
            color: white;
            text-decoration: none;
            font-size: 12px;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        /* Green button */
        .actions-btns {
            background-color: green;
        }

        /* Red button */
        .actions-btns2 {
            background-color: red;
        }

        /* Optional: Add hover effects */
        .actions-btns:hover {
            background-color: darkgreen;
        }

        .actions-btns2:hover {
            background-color: darkred;
        }
        .login-title {
    margin-top: 15px;
    text-align: center;
    font-size: 30px;
    letter-spacing: 2px;
    margin-top: 15px;
    font-weight: bold;
    color: #ECF0F5;
}
.nav-item {
        position: relative;
    }

    .nav-link {
        display: block;
        padding: 10px;
        color: #fff;
        text-decoration: none;
        transition: background-color 0.2s;
    }

    .nav-link:hover {
        background-color: #495057;
    }
    .btn-logout:hover {
        background-color: #dc3545;
    }

    .btn-logout {
        background: none;
        border: none;
        padding: 10px;
        margin: 0;
        cursor: pointer;
        color: #fff;
        width: 100%;
        text-align: left;
        transition: background-color 0.2s;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        left: 100%;
        top: 0;
        background-color: #495057;
        min-width: 200px;
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-item {
        padding: 10px;
        color: #fff;
        text-decoration: none;
    }

    .dropdown-item:hover {
        background-color: #6c757d;
    }
    .logo-img {
    width: 50%; /* Adjust width as needed (e.g., 80% or a fixed width like 150px) */
    max-width: 100px; /* Set a maximum width */
    height: auto; /* Maintain aspect ratio */
  
    padding: 5px; /* Optional: space between the image and the border */
    box-sizing: border-box; /* Include padding and border in element's total width and height */
}
    </style>
</head>

<body>

<div class="combined-sidebar">
    <!-- Logo Section -->
    <div class="logo text-center mb-4">
    <img src="{{ asset('images/cmc.png') }}" alt="Logo" class="img-fluid logo-img">
</div>

    <ul class="nav-list">
        <li class="nav-item">
            <a href='{{ asset('admin_dashboard') }}' class="nav-link">
                <i class="fa fa-tachometer"></i> Dashboard
            </a>
        </li>
        <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" onclick="toggleDropdown(event)">
        <i class="fa fa-users"></i> List of Users
    </a>
    <ul class="dropdown-content">
        <li><a href="{{ route('deliberation') }}" class="dropdown-item"><i class="fa fa-user"></i> For Deliberation</a></li>
        <li><a href="{{ route('pft') }}" class="dropdown-item"><i class="fas fa-running"></i> &nbsp For PFT</a></li>
        <li><a href="{{ route('medical') }}" class="dropdown-item"><i class="fa fa-medkit"></i> For Medical</a></li>
        <li><a href="{{ route('verified') }}" class="dropdown-item"><i class="fa fa-user"></i> Verified</a></li>
        <li><a href="{{ route('incomplete') }}" class="dropdown-item"><i class="fa fa-exclamation-triangle"></i> Pending</a></li>
    </ul>
</li>

        </li>
        <li><a href="#" class="dropdown-item"><i class="fa fa-file-text"></i> Reports</a></li>
    </ul>

    <form action="{{ route('admin_logout') }}" method="POST" class="logout-form">
        @csrf
        @method('POST')
        <button type="submit" class="btn-logout">
            <i class="fa fa-sign-out"></i> Log Out
        </button>
    </form>
</div>
    <!-- Main Content -->
    <div class='center-content'>
        <section>
            <div class='site-info'>
                <!-- USER -->
                <div class='all-quick-info' style='background: #5bc0de; border-color: #5bc0de;'>
                    <div class='info-icon'><i class="fa fa-users"></i></div>
                    <div class='text-right'>
                        <div class='info-numbers'><span>0</span></div>
                        <div>Total Users</div>
                    </div>
                    <div class='info-box-footer'>
                        <a href="{{ asset('tables') }}" class='user-href'>
                            <span class="pull-left">View Details</span>
                            <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                    </div>
                </div>

                <!-- DELIBERATION -->
                <div class='all-quick-info' style='background: #f0ad4e; border-color: #f0ad4e;'>
                    <div class='info-icon'><i class="fa fa-users"></i></div>
                    <div class='text-right'>
                        <div class='info-numbers'><span>0</span></div>
                        <div>Deliberation</div>
                    </div>
                    <div class='info-box-footer'>
                        <a href='{{ asset('deliberation') }}' class='user-href' style='color: #f5eeee;'>
                            <span class="pull-left">View Details</span>
                            <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                    </div>
                </div>

                <!-- MEDICAL -->
                <div class='all-quick-info' style='background: #8dabe9; border-color: #5cb85c;'>
                    <div class='info-icon'><i class="fa fa-medkit"></i></div>
                    <div class='text-right'>
                        <div class='info-numbers'><span>0</span></div>
                        <div>Medical</div>
                    </div>
                    <div class='info-box-footer'>
                        <a href='{{ asset('medical') }}' class='user-href' style='color: #f5eeee;'>
                            <span class="pull-left">View Details</span>
                            <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                    </div>
                </div>

                <!-- PFT -->
                <div class='all-quick-info' style='background: #75c284; border-color: #ff5256;'>
                    <div class='info-icon'><i class="fas fa-running"></i></div>
                    <div class='text-right'>
                        <div class='info-numbers'><span>0</span></div>
                        <div>Physical Fitness Test</div>
                    </div>
                    <div class='info-box-footer'>
                        <a href='{{ asset(path: 'pft') }}' class='user-href' style='color: #f5eeee;'>
                            <span class="pull-left">View Details</span>
                            <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                    </div>
                </div>

                <!-- Verified -->
                <div class='all-quick-info' style='background: #5bc0de; border-color: #5bc0de;'>
                    <div class='info-icon'><i class="fa fa-check"></i></div>
                    <div class='text-right'>
                        <div class='info-numbers'><span>0</span></div>
                        <div>Verified</div>
                    </div>
                    <div class='info-box-footer'>
                        <a href='{{ asset('verified') }}' class='user-href' style='color: #f5eeee;'>
                            <span class="pull-left">View Details</span>
                            <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                    </div>
                </div>

                <!-- Pending Requirements -->
                <div class='all-quick-info' style='background: #d9534f; border-color: #d9534f;'>
                    <div class='info-icon'><i class="fa fa-hourglass-2"></i></div>
                    <div class='text-right'>
                        <div class='info-numbers'><span>0</span></div>
                        <div>Pending Requirements</div>
                    </div>
                    <div class='info-box-footer'>
                        <a href='{{ asset('incomplete') }}' class='user-href' style='color: #f5eeee;'>
                            <span class="pull-left">View Details</span>
                            <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class='newest-members'>
                <div class='notifications'>
                    <div class='notify-header'>
                        <h2><i class="fa fa-users"></i> New Members</h2>
                        <div class='action-holder'>
                            <i class="fa fa-bell"></i>
                            <i class="fa fa-cog"></i>
                        </div>
                    </div>

                    <div class='notify-box'>
                        <table id="customers">
                            <thead>
                                <tr>
                                    <th>Joined</th>
                                    <th>Serial Number</th>
                                    <th>Rank</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a class='actions-btns' href='#'><i class="fa fa-edit"></i></a>
                                        <a class='actions-btns2' href='#'><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class='view-all-members'>
                            <span class='view-all-btn1'><a href='#'>View All Members</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="./script.js"></script>
    <script>
     function toggleDropdown(event) {
        event.preventDefault(); // Prevent the default anchor click behavior
        const dropdown = event.target.nextElementSibling; // Get the dropdown content
        dropdown.classList.toggle('show'); // Toggle the 'show' class
    }

    // Optional: Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const dropdowns = document.querySelectorAll('.dropdown-content');
        dropdowns.forEach(dropdown => {
            if (!dropdown.parentElement.contains(event.target)) {
                dropdown.classList.remove('show');
            }
        });
    });
    </script>
</body>

</html>
