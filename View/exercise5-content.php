<!-- Exercise JavaScript I -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a keyword brainwashed script. Add an input and a button, then add the code to add functionality. 
      The user will enter a long string of text, then on button click, the code will search the long string for a keyword and print everything after the keyword to a p tag. 
      (You may use "skeleton" as the keyword if you can't think of anything else.)</h4>
    <!-- Place Answer Here -->

    <label for="brainwashed">Text Input</label>
      <input id = "brainwashed">
      <p id=brainwashedDisplay></p>
      <button id= "brainwashedButton" onClick="makebrainwashed(document.getElementById
      ('brainwashed').value )"> Click Me! </button>
      
      <script>
      function makebrainwashed(input)
      {
        //print what was given with
        document.getElementById("brainwashedDisplay").innerHTML = input.substring(input.indexOf('skeleton')+8, input.length );
      } 
      
      </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 1 -->

<!-- Question 2 -->
  <div class='student-response'>
    <h1>Question #2:</h1>
    <h4>Create the script and elements necessary to hold a game inventory. Create a hardcoded array for this inventory. 
        One input and button will be responsible for checking what item is at the entered index, 
        while another input and button will be responsible for entering how many of that item is stored. 
        (Hint two arrays or a 2 dimensional array is needed)</h4>
    <!-- Place Answer Here -->
      <!-- Button 1 -->
    <label for="gameinput">Game Index</label>
      <input id = "gameinput">
      <p id=gameDisplay></p>
      <button id= "gameButton" onClick="get_games(document.getElementById
      ('gameinput').value )"> Click Me! </button> <br> <br>

     
      <script>
      var my_games = ['Age of Empires', 'Civilization IV', 'Minecraft'] ;
      var game_amount =  ["5", "10", "15"];
      var inputvar = 0;

      function get_games(input)
      {
        inputvar = input;
        document.getElementById("gameDisplay").innerHTML = my_games [input] + "| Quantity: " + game_amount [input];
      } 
    
      </script>

    <!-- Button 2 -->
    <label label for="quantityinput">Quantity</label>
      <input id = "quantityinput">
      <!-- <p id=quantityDisplay></p> -->
      <button id= "quantityButton" onClick="get_quantity(document.getElementById
      ('quantityinput').value )"> Click Me! </button>

      <script>
      
      function get_quantity(input2)
      {
        document.getElementById("gameDisplay").innerHTML = my_games [inputvar] + "| Quantity: " + (game_amount[inputvar] = input2);
      } 
      
      </script>


    <!-- Place Answer Here -->
  </div>
<!-- Question 2 -->

<!-- Question F -->
  <div class='student-response'>
    <h1>Find-IT #1:</h1>
    <h4>Create a time travel script. Use the necessary code and elements to allow the user to enter a date (in year, month, day, hour, and minute) 
        they would like to travel to. Then display the number of years, days, hours, and minutes they would need to travel to reach that date and time. 
        (Notice month is excluded)</h4>

    <!-- Place Answer Here -->
      <label for="travel_input">Enter a Date and Time:</label>
      <input id = "travel_input">
      <p id=travel_display></p>
      <button id= "travel_button" onClick="get_date(document.getElementById
      ('travel_input').value )"> Click Me! </button> <br> <br>

     
      <script>
      var inputvar = 0;

      function get_date(input)
      {
        document.getElementById("travel_display").innerHTML = getFullYear(input), getDate(input), getHours(input), getMinutes(input)
      }; 
    
      </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question F -->

