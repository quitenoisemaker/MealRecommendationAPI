<script>
	// Fetch Api
fetch(`https://mealrecommendation.herokuapp.com/api/allmeals`)
     .then(res => res.json())
   .then(data => {
   		let data2=data.data[0];
    let meal= data2.Allergy.MainMeal;
   		console.log(meal)
   

    })

</script>