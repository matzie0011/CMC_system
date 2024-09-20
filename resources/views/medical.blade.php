<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tables</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

.combined-sidebar {
    background: #222;
    color: #fff;
    width: 250px;
    height: 100%;
    display: flex;
    flex-direction: column;
    padding: 20px;
    box-shadow: 2px 0 4px rgba(0, 0, 0, 0.1);
    box-sizing: border-box;
    position: relative;
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

    .search-input {
      width: calc(30% - 100px);
      padding: 8px;
      border: 0.1px solid #b3b4b7;
      border-radius: 5px;
      margin-bottom: 8px;
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
      
    }

    .combined-sidebar li a:hover {
      background: #333;
    }

    .combined-sidebar .fa {
      margin-right: 10px;
    }

    .dropdown-btn {
      cursor: pointer;
    }

    .second-nav-ul {
      display: none;
      list-style-type: none;
      padding-left: 20px;
    }

    .second-nav-ul .nav-items a {
      color: #fff;
      text-decoration: none;
      display: block;
      padding: 8px 10px;
    }

    .second-nav-ul .nav-items a:hover {
      background: #333;
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

    .notify-box table th, .notify-box table td {
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
.actions-btns, .actions-btns2 {
    display: inline-block;
    padding: 5px;
    border-radius: 4px; /* Optional: for rounded corners */
    color: white; /* Text color */
    text-decoration: none; /* Remove underline from links */
    font-size: 12px; /* Adjust as needed */
    transition: background-color 0.3s, box-shadow 0.3s; /* Smooth transitions */
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
    background-color: darkgreen; /* Darker green on hover */
}

.actions-btns2:hover {
    background-color: darkred; /* Darker red on hover */
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

/*  */
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
        <li><a href="{{ route('pft') }}" class="dropdown-item"><i class="fas fa-running"></i> For PFT</a></li>
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

    <!--
    <li id='all-nav'>
      <a href='#' class='dropdown-btn'><i class="fa fa-exclamation-triangle"></i> Pending <i class="fa fa-angle-down" aria-hidden="true"></i></a>
      <ul id='nav' class='second-nav-ul'>
        <li class='nav-items'><a href='#'>Banned IPs</a></li>
      </ul>
    </li>
    -->
  </div>
  <!--MONITORING-->
  <div class='center-content'>
    <section>
      <div class='site-info'>

        <!-- Existing Info Boxes -->
      <!--
        <div class='all-quick-info' style='background: #5bc0de; border-color: #f0ad4e;'>
          <div class='info-icon'><i class="fa fa-users"></i></div>
          <div class='text-right'>
            <div class='info-numbers'><span>0</span></div>
            <div>Users</div>
          </div>
-->
        </div>

     
<!--
        <div class='all-quick-info' style='background: #f7f7f7; border-color: #e6e6e6;'>
          <div class='info-icon'><i class="fa fa-clock-o"></i></div>
          <div class='text-right'>
            <div class='info-numbers'><span>24h</span></div>
            <div>Uptime</div>
          </div>
          <div class='info-box-footer'>
            <a href='#' class='user-href' style='color: #333;'><span class="pull-left">View Details</span>
              <span class='pull-right'><i class="fa fa-arrow-circle-right"></i></span></a>
          </div>
        </div>-->
        <div class='newest-members'>
  <div class='notifications'>
    <div class='notify-header'>
      <h2><i class="fa fa-users"></i> List of Users For Medical </h2>
      <div class='action-holder'>
        <i class="fa fa-bell"></i> <i class="fa fa-cog"></i>
      </div>
    </div>
    <div class="search-container">
      <input type="text" id="search-input" class="search-input" placeholder="Search...">
      <div class='notify-box'>
        <table id="customers">
          <thead>
            <tr>
              <th>Serial Number</th>
              <th>Rank</th>
              <th>Unit Assignment</th>
              <th>Full Name</th>
              <th>Date of Birth</th>
              <th>Age</th>
              <th>Status</th>
              <th>View</th>
            </tr>
          </thead>
          <tbody>
         
              
                <td></td>
                <td></td>
                <td></td>
                <td></td>
               
                <td></td>

 <td> </td>
                
                <td> </td>
                <td>
                  <a href="" class="update-btn">
                    <i class="fa fa-eye"></i>
                  </a>
                </td>
              </tr>
      
          </tbody>
        </table>
 <!-- No Results Message -->
 <div id="no-results" style="display: none; text-align: center; padding: 20px;">
    <p>No results found.</p>
  </div>

        <div class='view-all-members'>
          <span class='view-all-btn1'><a href='#'>View All Members</a></span>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('search-input');
    const tableRows = document.querySelectorAll('#customers tbody tr');
    
    searchInput.addEventListener('input', () => {
      const query = searchInput.value.toLowerCase();
      
      tableRows.forEach(row => {
        const cells = row.getElementsByTagName('td');
        let match = false;
        
        for (let i = 0; i < cells.length; i++) {
          if (cells[i].textContent.toLowerCase().includes(query)) {
            match = true;
            break;
          }
        }
        
        row.style.display = match ? '' : 'none';
      });
    });
  });
  document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.getElementById('search-input');
  const tableRows = document.querySelectorAll('#customers tbody tr');
  const noResultsMessage = document.getElementById('no-results');

  searchInput.addEventListener('input', () => {
    const query = searchInput.value.toLowerCase();
    let hasResults = false;

    tableRows.forEach(row => {
      const cells = row.getElementsByTagName('td');
      let match = false;
      
      for (let i = 0; i < cells.length; i++) {
        if (cells[i].textContent.toLowerCase().includes(query)) {
          match = true;
          break;
        }
      }
      
      if (match) {
        row.style.display = '';
        hasResults = true;
      } else {
        row.style.display = 'none';
      }
    });

    // Show or hide the "No Results Found" message
    noResultsMessage.style.display = hasResults ? 'none' : 'block';
  });
});

</script>

</body>
</html>
