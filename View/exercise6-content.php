<!-- Exercise JavaScript II -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a dice class that holds an int attribute for the number of sides it has, and a roll function that rolls the dice and returns the outcome. 
      Add the elements and script needed so that a user can enter a number of sides and a number of times to roll; display on a button click.</h4>
    <!-- Place Answer Here -->
    <label for ="sides_input"> Number of Sides</label>
    <input id="sides_input"> <br> <br>
    <label for ="rolls_input"> Number of Rolls</label>
    <input id="rolls_input">
    <button id="button" onclick="dice_roll( document.getElementById('sides_input').value, document.getElementById('rolls_input').value )">Enter</button>
    <p id="outcome"></p>
    <script>

      //Place Class Here (It's best to create classes outside the scope of functions to avoid creating a class with each click, rather than an object)
        var sides = 0;
        var rolls = 0;
        var myRandom = 0;

      class Dice
      {
        //constructor
        constructor (numSides)
        {
          this.side= numSides;                    
        }
      }

     function roll()
        {
          document.getElementById("outcome").innerHTML = "You rolled a " + myRandom
        }
      

      //Place Class Here

      function dice_roll(s_input, r_input) 
      {
        //Place Answer Here
        var sides = s_input;

        var rolls = r_input;

        var turn = new Dice(sides);
        
        // var sideTwo = new Dice("2");
        // var sideThree = new Dice("3");
        // var sideFour = new Dice("4");
        // var sideFive = new Dice("5");
        // var sideSix = new Dice("6");
        
        for(i=0; i < rolls; i++) 
        {
          myRandom = Math.floor(Math.random() * turn.side) + 1;
          
        } 
        roll() 
        
        
        



        //Place Answer Here
      }
    </script>

  </div>

    <!-- Place Answer Here -->
  </div>
<!-- Question 1 -->

<!-- Question F1 -->
  <div class='student-response'>
    <h1>Question #F1:</h1>
    <h4>Copy Question 1, but add a 'cheaty' attribute that allows the user to also input how cheaty they wish their dice to be. 
      (be creative and useful, it'll earn you more points! :)</h4>
    <!-- Place Answer Here -->
      


    <!-- Place Answer Here -->
  </div>
<!-- Question F1 -->

<!-- Question F2 -->
  <div class='student-response'>
    <h1>Question #F2:</h1>
    <h4>Create the elements and script to accept a username and password. Add a 'register' button that accepts a new username and password and stores it along with some 
      pre-written and hardcoded usernames and passwords. Display 'Access Granted' or some other secret in a p tag if the username and password match, otherwise show an error.</h4>
    <!-- Place Answer Here -->

      

    <!-- Place Answer Here -->
  </div>
<!-- Question F2 -->

<!-- Question F3 -->
  <div class='student-response'>
    <h1>Question #F3:</h1>
    <h4>Create a monster class that has attributes like name, health, attack damage, and description as well as a function to attack and return a 
      damage amount, and another function to be sent a damage amount for the monster to take. Then create 2 monster objects and allow the user to 
      click a button next to the monster to attack it for 1d6 damage (1-6). Constantly display the monsters' hp's and when the button is clicked also 
      have that monster attack the user. display the users health as well (ex. starting at 100). </h4>
    <!-- Place Answer Here -->
      


    <!-- Place Answer Here -->
  </div>
<!-- Question F3 -->
