<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>My Order</title>
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Features-Boxed.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Footer-Dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navigation-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            margin-top: 30px;
            flex: 1;
        }

        .filter-container {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #ffffff;
        }

        table,
        th,
        td {
            border: 1px solid #dee2e6;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .status-confirmed {
            color: green;
        }

        .status-processing {
            color: orange;
        }

        /* Footer styles */
        .footer {
            margin-top: auto;
            padding-top: 20px;
            background-color: #343a40;
            /* Adjust as needed */
            color: #ffffff;
            /* Adjust as needed */
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-light navbar-expand-lg sticky-top bg-dark navigation-clean" style="color: var(--bs-white);">
        <div class="container">
            <img id="image1" src="{{ asset('assets/img/logo.png') }}" class="mr-3" style="margin-right: 3px; width: 60px;">
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navcol-1">
                <ul class="navbar-nav" style="color: var(--bs-white); font-weight: bold;">
                    <li class="nav-item"><a class="nav-link" href="{{ url('arca_artshop') }}" style="color: var(--bs-white);">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('arca_artshop/shop') }}" style="color: var(--bs-white);">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('arca_artshop/myorder') }}" style="color: var(--bs-white);">My Orders</a></li>
                    <li class="nav-item"><a class="nav-link" href="#footer" style="color: var(--bs-white);">Contact</a></li>
                </ul>
                <div class="d-flex">
                    <img src="{{ asset('assets/img/bag.png') }}" alt="Shopping Bag" style="margin-right: 20px; width: 25px;">
                    <a href="/login" class="btn btn-outline-light">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        <h2>My Orders</h2>

        <!-- Filter container at the top right corner -->
        <div class="filter-container">
            <label for="orderFilter">Filter:</label>
            <select id="orderFilter" onchange="applyFilter()">
                <option value="all">All Orders</option>
                <option value="last7days">Last 7 Days</option>
                <option value="today">Today</option>
                <!-- Add more filter options as needed -->
            </select>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Quantity</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Order Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="orderTableBody">
                <!-- Table body content will be dynamically populated using JavaScript -->
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer id="footer" class="footer-dark">
        <div class="container footer-container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Company Name</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">Company Name © 2023</p>
        </div>
    </footer>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script>
        function applyFilter() {
            var filter = document.getElementById("orderFilter").value;
            var currentDate = new Date();

            // Replace this with fetching data from your database
            var orders = [
                {'code': 'ORD001', 'quantity': 2, 'product_name': 'Product A', 'price': 50.00, 'total': 100.00, 'order_date': '2023-01-01', 'status': 'Confirmed'},
                {'code': 'ORD002', 'quantity': 1, 'product_name': 'Product B', 'price': 30.00, 'total': 30.00, 'order_date': '2023-02-01', 'status': 'Processing'},
                // Add more orders as needed
            ];

            // Filter orders based on the selected option
            var filteredOrders = [];
            switch (filter) {
                case 'last7days':
                    var sevenDaysAgo = new Date();
                    sevenDaysAgo.setDate(currentDate.getDate() - 7);

                    filteredOrders = orders.filter(order => new Date(order.order_date) >= sevenDaysAgo);
                    break;

                case 'today':
                    filteredOrders = orders.filter(order => new Date(order.order_date).toDateString() === currentDate.toDateString());
                    break;

                // Add more cases for additional filter options

                default:
                    filteredOrders = orders;
            }

            // Render the filtered orders in the table
            renderOrders(filteredOrders);
        }

        function renderOrders(orders) {
            var tbody = document.getElementById("orderTableBody");
            tbody.innerHTML = "";

            orders.forEach(order => {
                var row = "<tr>" +
                    `<td>${order['code']}</td>` +
                    `<td>${order['quantity']}</td>` +
                    `<td>${order['product_name']}</td>` +
                    `<td>${order['price']}</td>` +
                    `<td>${order['total']}</td>` +
                    `<td>${order['order_date']}</td>` +
                    `<td class='status-${order['status'].toLowerCase()}'>${order['status']}</td>` +
                    "</tr>";
                tbody.innerHTML += row;
            });
        }

        // Initial rendering with all orders
        applyFilter();
    </script>
</body>

</html>