<h2>Meal Recommendation System REST API</h2>
<p>Here is a Meal Recommendation System REST API that operate on three Allergies</p>
<ul>
<li>Nut Allergy</li>
<li>ShellFish Allergy</li>
<li>SeaFood Allergy</li>
</ul>
<p>
The system already contains 10 users. Every user on the system is expected to pick their allergy from the Allergies operated on the system.
</p>
<p>
The system recommend meals according to the allergy picked by a user. The meals recommended include the Main Meal and two side meals. <br> The system can also fetch meal recommendations for more than one user at a time(The system fetch meal recomendation for users that have already picked an allergy). Users can have more than one allergy. 
</p>
<p>Laravel was use in this project because is a comprehensive framework suitable for any kind of web development, is logically structured, and enjoys strong community support.</>

<h3>How to use the API</h3>
<p>Different Endpoint was created for each task.</p>
<p>Start by Migrating Tables to your database and run Seeder for Fake Meals (you can as well insert your different meals on the Meal Table). Insert the different allergy on the Allergy table and also insert users on the MealUser Table</p>
<ul>
<li>Fetch all meals with their Allergy. <br> <a href="https://mealrecommendation.herokuapp.com/api/allmeals">https://mealrecommendation.herokuapp.com/api/allmeals</a></li><br> 
<div>
<img src="image/allmeal.png">
</div>
<li>User to select Allergy and get meal recommendation. <br>  <a href="https://mealrecommendation.herokuapp.com/api/user/1/allergy">https://mealrecommendation.herokuapp.com/api/user/1/allergy</a> <br>  <b>NOTE: You can change the user_id ranging from 1-10 to see different user</b></li><br> 
<div>
<img src="image/user.png">
</div>
<div>
<img src="image/recomendation.png">
</div>
<li>Fetch meal recommendations for more than one user at a time. <br>  <a href="https://mealrecommendation.herokuapp.com/api/users/allergy">https://mealrecommendation.herokuapp.com/api/users/allergy</a> <br>  <b>Hint: Users and their different allergy </b></li> <br> 
<div>
<img src="image/selected.png">
</div>
</ul>

<p>Thanks <b>Eden</b> for this opportunity to work on this task. Really Enjoyed every bit of it </p>
