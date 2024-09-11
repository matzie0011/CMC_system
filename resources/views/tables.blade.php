<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Client List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #e4e8ee;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        hr {
            border: 0;
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }

        button {
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 4px;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 14px;
            margin-left: 5px;
        }

        button.delete-btn {
            background-color: #dc3545;
        }

        button.update-btn {
            background-color: #28a745;
        }

        button:hover {
            opacity: 0.8;
        }

        footer {
            text-align: center;
            font-size: 0.9em;
            color: #777;
        }

        header {
            background-color: #267df4;
            color: #fff;
            padding: 10px 0;
        }

        nav {
            display: flex;
            justify-content: left;
        }

        .nav-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
        }

        .nav-list li {
            margin: 0 10px;
        }

        .nav-list a {
            color: #fff;
            text-decoration: none;
            padding: 10px 11px;
            display: block;
            font-weight: bold;
        }

        .nav-list a:hover,
        .nav-list a:focus {
            background-color: #b4cef2;
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            .nav-list {
                flex-direction: column;
                align-items: center;
            }

            .nav-list li {
                margin: 5px 0;
            }
        }

        .dropdown {
            position: relative;
            display: inline-block;
            margin: 20px;
        }

        .dropdown-button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .dropdown-button:hover {
            background-color: #0056b3;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border-bottom: 1px solid #ddd;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropdown-button {
            background-color: #0056b3;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 5px;
        }

        .logo img {
            max-width: 70px;
            height: auto;
            display: block;
            width: 150px; /* Adjust based on your logo size */
        }

        .search-container {
            margin-bottom: 45px;
            margin-top: 5px;
            
        }

        .search-input {
            width: 20%;
            padding: 7px;
            border-radius: 10px;
            border: 1px solid #ddd;
            

             position: absolute;
                right: 20px;
 

        }

        .search-input:focus {
            border-color: #007bff;
            outline: none;
            align-content: right;
        }
    </style>
</head>
<body>
    <header>
    <nav>
        <ul class="nav-list">
            <li><a href="#">Dashboard</a></li>
            
             <li class="dropdown">
                <a href="#" class="dropbtn">Type of Entry</a>
                <div class="dropdown-content">
                    <a href="#">Officer</a>
                    <a href="#">Non-Officer</a>
                    <a href="#">Lateral</a>
                </div>
            </li>

            <li class="dropdown">
                <a href="#" class="dropbtn">Status</a>
                <div class="dropdown-content">
                     <a href="#">Applicant</a>
                       <a href="#">For Submission</a>
                    <a href="#">Incomplete</a>
                    <a href="#">Verified</a>
                    <a href="#">Medical</a>
                    <a href="#">PFT</a>
                    <a href="#">Deliberation</a>

                </div>
            </li>
<!--
            <li class="dropdown">
                <a href="#" class="dropbtn">Medical</a>
                <div class="dropdown-content">
                    <a href="medical-overview.html">Overview</a>
                    <a href="medical-records.html">Records</a>
                    <a href="medical-appointments.html">Appointments</a>
                </div>
            </li>
-->
            
        </ul>
    </nav>
</header>

    <div class="search-container">
        <input type="text" class="search-input" placeholder="Search...">
<h4>DUMMY DATA <h4>
    </div>
    <table>
        <thead>
            <tr>
                <th>Serial Number</th>
                <th>Rank</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Date of Birth</th>
                <th>Unit Assignment</th>
                <th>View</th>
           
              
             
            </tr>
        </thead>
        <tbody>
        @foreach ($tables as $table)
        <tbody>
                                        <tr>
                                          <td>    {{ $table->serial_number}}  </td>
                                            <td>    {{ $table->rank}}   </td>
                                            <td>    {{ $table->lname }}</td>
                                            <td>    {{ $table->fname }} </td>
                                            <td>    {{ $table->mname }}</td>
                                            <td>    {{ $table->date_of_birth }}</td>
                                            <td>    {{ $table->unit_assignment }}</td>
                                            <td> 
                                            <a href="{{ route('profilepage', ['serial_number' => $table->serial_number]) }}" class="update-btn">
        {{ __('View') }}
    </a>
                                        </tr>
                                        
                                    </tbody>
                                             @endforeach    
        </tbody>
    </table>
    <hr>
    <footer>
        <p>©2024 Career Management Center. All right reserved.</p>
    </footer>
</body>
</html>
