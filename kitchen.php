<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Three Columns Layout</title>
</head>
<body>
<section class="section">
    <div class="container">
        <h1 class="title">Kitchen</h1>
        <div class="columns">
            <!-- First Column - Order Created -->
            <div class="column">
                <p class="has-background-info has-text-white p-4">
                   Order Created  [Order 10]
                </p>
                <table class="table is-bordered is-fullwidth">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pizza Margarita</td>
                            <td>$12.00</td>
                        </tr>
                        <tr>
                            <td>Pulpo a la gallega</td>
                            <td>$20.00</td>
                        </tr>
                        <tr>
                            <td>Pastel de carne</td>
                            <td>$15.00</td>
                        </tr>
                        <tr>
                            <td>Mofongo</td>
                            <td>$12.00</td>
                        </tr>
                        <tr>
                            <td>Pastelón de plátano verde</td>
                            <td>$15.00</td>
                        </tr>
                        <tr>
                            <td>Asopao de pollo</td>
                            <td>$10.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Second Column - Order In Process -->
            <div class="column">
                <p class="has-background-success has-text-white p-4">
                    Orders In Process:[Oder 17]
                </p>
                <table class="table is-bordered is-fullwidth">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                        <tr>
                            <td>Ensalada César</td>
                            <td>$10.00</td>
                        </tr>
                        <tr>
                            <td>Hamburguesa Clásica</td>
                            <td>$15.00</td>
                        </tr>
                        <tr>
                            <td>Arroz con pollo</td>
                            <td>$10.00</td>
                        </tr>
                        </tr>
                     
                    </tbody>
                </table>
            </div>

            <!-- Third Column - Order Completed -->
            <div class="column">
                <p class="has-background-warning has-text-white p-4">
                     Orders Completed:[Order 13]
                </p>
                <table class="table is-bordered is-fullwidth">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>Hamburguesa Clásica</td>
                            <td>$15.00</td>
                        </tr>
                
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
</body>
</html>