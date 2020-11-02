<!-- Demo 5 JavaScript I -->

<!-- Question 1 -->
  <div class='student-response'>
    <h1>Question #1:</h1>
    <h4>Create a paragraph tag and write your favorite video game titles into it using a script.</h4>
    <!-- Place Answer Here -->

    <p id="myVideoGame"></p>

    <script>
    //Change content of p-tag
    document.getElementById("myVideoGame").innerHTML = "Age of Empires and Civilization"
    </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 1 -->

<!-- Question 2 -->
  <div class='student-response'>
    <h1>Question #2:</h1>
    <h4>Create two string variables for your first and last name, then write them into an h3 tag.</h4>
    <!-- Place Answer Here -->  
    
     <h3 id="fullName"></h3>
      
      <script>
      //declare and initialize first and last name
      var firstName = "Thomas";
      var lastName = "Lewis";

      //print to h3 tag
      document.getElementById("fullName").innerHTML = firstName+ " " + lastName;
      
      </script>
      
    <!-- Place Answer Here -->
  </div>
<!-- Question 2 -->

<!-- Question 3 -->
  <div class='student-response'>
    <h1>Question #3:</h1>
    <h4>Write your favorite quote in a string variable, then print it to a p tag and its length to another p tag.</h4>
    <!-- Place Answer Here -->
  <p id="quoteText">  </p>
  <p id ="quoteLength"></p>

  <script>
  var quote = "\"Waste Not Want Not\"";

  document.getElementById("quoteText").innerHTML = quote;
  
  document.getElementById("quoteLength").innerHTML = "This quote has " + quote.length + " characters";
  
  </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question 3 -->

<!-- Question 4 -->
  <div class='student-response'>
    <h1>Question #4:</h1>
    <h4>Create an array of a few of your favorite foods, then display your absolute favorite from the list with a description.</h4>
    <!-- Place Answer Here -->
    <strong id="myFoods"></strong>
    <script>
    //declare array
    var myFavoriteFoods = ["Spaghetti", "Beef and Potatoes", "Pancakes", "Soup"]

    //display favorite
    document.getElementById("myFoods").innerHTML = "My favorite food is " + myFavoriteFoods[2];
      
</script>
    <!-- Place Answer Here -->
  </div>
<!-- Question 4 -->

<!-- Question 5 -->
  <div class='student-response'>
    <h1>Question #5:</h1>
    <h4>Create an array, then add an element value onto the end and display it without using indexes.</h4>
    <!-- Place Answer Here -->
    <p id="arrayMethodDisplay"> </p>

    <script>
    //Create Array
    var myCountries = ["UK", "Ireland", "Germany"];

    myCountries.push("Swizterland");

    document.getElementById("arrayMethodDisplay").innerHTML = myCountries [myCountries.length - 1];
        
    </script>          

    <!-- Place Answer Here -->
  </div>
<!-- Question 5 -->

<!-- Question 6 -->
  <div class='student-response'>
    <h1>Question #6:</h1>
    <h4>Create a date object for your birthday or some date special to you and write it to the document.</h4>
    <!-- Place Answer Here -->
  <p id=myBirthday></p>

  <script>
  //create date
  var myBday = new Date(1996, 9, 29);

  document.getElementById("myBirthday").innerHTML = "My Birthday is: " + myBday;
  
  </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question 6 -->

<!-- Question 7 -->
  <div class='student-response'>
    <h1>Question #7:</h1>
    <h4>Get the current time and print it to a p tag span with description in the p tag.</h4>
    <!-- Place Answer Here -->
    <p> Today is: <span id="rightNow"> </span> </p>

    <script>
    
    //Create Date Variable
    var today = new Date();

    document.getElementById("rightNow").innerHTML = today.getHours() + ":" + today.getMinutes();


    </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question 7 -->

<!-- Question 8 -->
  <div class='student-response'>
    <h1>Question #8:</h1>
    <h4>Create a p tag that displays :| normally, and displays :D when waved over (or some other small art) using JS.</h4>
    <!-- Place Answer Here -->

    <p onMouseOver = "innerHTML = ':D' " onMouseOut="innerHTML = ':|'" > :| </p>     

    <!-- Place Answer Here -->
  </div>
<!-- Question 8 -->

<!-- Question 9 -->
  <div class='student-response'>
    <h1>Question #9:</h1>
    <h4>Create a function that accepts a first name and last name, concatenates the two with a space between them, and returns them. Use this function to print your name to a p tag.</h4>
    <!-- Place Answer Here -->

    <p id="fullNameFunc"> </p>

      <script>
      //Build Function
      function getFullName(first, last)
      {
        //return appended name
        return first + " " + last
      }

      document.getElementById("fullNameFunc").innerHTML = getFullName ("Thomas", "Lewis");
      </script>

    <!-- Place Answer Here -->
  </div>
<!-- Question 9 -->

<!-- Question 10 -->
  <div class='student-response'>
    <h1>Question #10:</h1>
    <h4>Create a button that calls a function that accepts the value from an input tag as a parameter and prints to a p tag a string of that value with 
      " -One of our happy customers" appended onto the end.</h4>
    <!-- Place Answer Here -->
      
      <label for="happyCustomerInput">Quote Input</label>
      <input id = "happyCustomerInput">
      <p id=customerQuoteDisplay></p>
      <button id= "customerQuoteButton" onClick="makeQuote(document.getElementById
      ('happyCustomerInput').value )"> Save Quote </button>
      
      <script>
      function makeQuote(input)
      {
        //print what was given with
        document.getElementById("customerQuoteDisplay").innerHTML = "\"" + input + "\" -One of our happy customers ";
      } 
      
      </script>
      

    <!-- Place Answer Here -->
  </div>
<!-- Question 10 -->

