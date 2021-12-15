<?php include "includes/header.php";?>
<h1>This is a Fruit Page</h1>
  <div class="column2">
      <div class="container">
    <button onclick="window.location.href='#SeasonalFruit'" class="box5" type="button" name="SeasonalFruit">Seasonal Fruit</button>
    <button onclick="window.location.href='#ImportedFruit'" class="box6" type="button" name="ImportedFruit">Imported Fruit</button>
    <button onclick="window.location.href='#WashingtonFruit" class="box7" type="button" name="WashingtonFruit">Washington Fruit</button>
    <button onclick="window.location.href='#YearRoundFruit'" class="box8" type="button" name="YearRoundFruit">Year Round Fruit</button>
      </div>
      <div class="container">
        <div id="SeasonalFruit" class="box-text">
          <h2>Season Fruit</h2>
          <p >This will contain our seasonal fruit that we currently have and
            whats comming up soon.</p>
        </div>
        <div id="ImportedFruit" class="box-text">
          <h2>Imported Fruit </h2>
          <p >This will contain our fruit we are bringing in from around the world
            for that special craving.</p>
        </div>
        <div id="WashingtonFruit" class="box-text">
          <h2>Washington Fruit</h2>
          <p >This will contain the fruit we have special from washington right now.</p>
        </div>
        <div id="YearRoundFruit" class="box-text">
          <h2>Year Round Fruit</h2>
          <p >This will contain the fruit we carry almost all year round for you.</p>
        </div>
      </div>
</div>
<?php include "includes/footer.php";?>
