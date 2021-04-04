<form action="/save" method="post">
    @csrf
    <label>Custom Keyword</label>
    <input type="text" name="keyword"><br>
    <label>Discount Price</label>
    <input type="number" name="discount"><br>

    <label >Date Time:</label>
    <input type="date" id="daytime" name="daytime"><br>

    <button type="submit">Create Coupon Code</button>

</form>
