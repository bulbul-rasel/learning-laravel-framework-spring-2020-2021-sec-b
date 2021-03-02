
<h1>Welcome To Sales </h1>

<br>
<button onclick="location.href='/system/sales/physical_store';"> Physical store </button>
<button onclick="location.href='/system/sales/social_media';"> Social media </button>
<button onclick="location.href='/system/sales/ecommerce';"> Ecommerce </button>
<button onclick="location.href='/logout';"> Logout </button>
<br><br>

<fieldset>
<legend>Dashboard:</legend>
    <table border='1'>
        <tr>
            <td>Channel Name</td>
            <td>Sold today</td>
            <td>Sold last 7 days</td>
        </tr>
        <tr>
            <td>Physical Channel</td>
            <td>{{ $data['physical_counter'] }}</td>
            <td>{{ $data['physical_counter_7'] }}</td>
        </tr>
        <tr>
            <td>Social Media</td>
            <td>{{ $data['social_counter'] }}</td>
            <td>{{ $data['social_counter_7'] }}</td>
        </tr>
        <tr>
            <td>Ecommerce Channel</td>
            <td>{{ $data['ecommerce_counter'] }}</td>
            <td>{{ $data['ecommerce_counter_7'] }}</td>
        </tr>
    </table>
    </fieldset>
