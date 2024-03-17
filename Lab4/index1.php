<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #show{
            display: none;
        }
    </style>
</head>
<body>
    <h1>Order Food Online</h1>
    <form action="result.php"    method="get">
        <label>Name: </label>
        <input type="text" name="name" required/>
        <br>
        <br>
        <label>Email: </label>
        <input type="email" name="email" required/>
        <br>
        <br>
        <label>Phone: </label>
        <input type="text" name="phone" required/>
        <br>
        <br>
        <label> Address: </label>
        <textarea name="address" required>
        </textarea>
        <br>
        <br>
        <label>Select Food: </label>
        <br>
        <input type="radio" id="pizza" name="s" value="Pizza">
        <label> Pizza</label>
        <br>
        <input type="radio" name="s" value="Burger">
        <label> Burger</label>
        <br>
        <input type="radio" name="s" value="Pasta">
        <label> Pasta</label>
        <br>
        <br>
<div id="show">
        <label>Pizza Size: </label>
        <select name="pizza_size" id="p_s">
<option value="0"></option>
<option value="10">Small (10$) </option>
<option value="15">Mediam (15$) </option>
<option value="20">Large (20$) </option>
        </select>
        <br>
        <br>
    </div>

<div>
    <label>Extra Toppings: </label> <br>
        <input type="checkbox" value="3" name="cheese">
        <label> Cheese (3$)</label>
        <br>
        <input type="checkbox" value="2" name="pepperoni">
        <label> Pepperoni (2$)</label>
        <br>
        <input type="checkbox" value="4" name="maushrooms">
        <label> Maushrooms (4$)</label>
        <br>
        <br>
    </div>
    <label>Quantity: </label>
    <input type="number" name="quantity" style="width:30px;" min="0" required/>
    <br>
    <br>
    <p>Delivery Preference:</p>
    <input type="radio" name="delivery" value="yes" /> <label>Yes</label> <br>
    <input type="radio" name="delivery" value="no" /> <label>No</label>
    <br>
    <br>
    <input type="submit" value="Place Order"/>
    </form>
    <script>
        const radio1=document.getElementById("pizza")
        radio1.addEventListener('change',function onFoodChange() {
          if (document.getElementById("pizza").checked) {
            show.style.display = "block";
          } else {
            show.style.display = "none";
          }
        });
    </script>
</body>
</html>