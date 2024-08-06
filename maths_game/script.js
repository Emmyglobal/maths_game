//PART A
var score = 0;
var playing = false;
var correctAnswer;
//if we click on the start/reset button
document.getElementById("start").addEventListener('click', function u() {
 	//if we are playing 
 	if (playing == true){
 		location.reload();
 	}
 	//if we are not playin
 	else{
 		playing = true;
 		//set score to 0
 		document.getElementById("scoreTime").innerHTML = score;
 		//show the coundown box
 		document.getElementById("time").style.display = 'block';
 		//reduce the time by one sec. loops
 		function setTimeInterval(){
 			var timeReduce = 60;
 			var action = setInterval(function(){
 				document.getElementById("timeValue").innerHTML = timeReduce;
 				timeReduce -= 1;
 				if (timeReduce <= 0) {
 					clearInterval(action);
 					//game over
 					document.getElementById("gameOver").style.display = "block";
 					document.getElementById("gameOver").innerHTML = "<p>Game Over!</p><p>Your score is " + score  + ".</p>";
 					document.getElementById("time").style.display = "none"
 					document.getElementById("correct").style.display = "none";
 					document.getElementById("tryAgain").style.display = "none";
 					playing = false;
 				}
 			}, 1000);
 		}

 		//change the button to reset
 		document.getElementById('start').innerHTML = "Reset Game";

 		//call the rreduce time function.
 		setTimeInterval();

 		
 		//call the generate question function.
 		generate();
 	}
 }); 
 
 //PART B

 //if we click the answer box
 for(var i=1; i<5; i++){
 	document.getElementById("box"+i).addEventListener('click',function (){
 		if(playing == true){
 			if(this.innerHTML==correctAnswer){
 				score += 5;
 				document.getElementById("scoreTime").innerHTML = score;

 				document.getElementById("correct").style.display = "block";

 				//Show correct box for 1sec.
 				setTimeout(function(){document.getElementById("correct").style.display = "none";}, 1000	
 				);

 				//Generate new question and answers
 				generate();
 			}
 			else{
 				document.getElementById("tryAgain").style.display = "block";
 				setTimeout(function(){
 				document.getElementById("tryAgain").style.display = "none";}, 1000	
 				);
 				score -= 4;
 				generate();
 			}
 		}
 		});
 	
 	}


 //generate a new question and mutiple answer
 		function generate(){
 			var questionA = Math.round(Math.random() * 11) + 1;
 			var questionB = Math.round(Math.random() * 11) + 1;
 			document.getElementById("question").innerHTML = questionA + "x" + questionB;
 			correctAnswer = questionA * questionB;
 			
 			var choice = Math.round(Math.random() * 3)+1;
 			//fiil one of the boxes with correct answer
 				document.getElementById("box"+choice).innerHTML = correctAnswer;

 				//fill other boxes with wrong answer
 			for(var i=1; i<= 4; i++){
 				if(i!== choice){
 					do{var wrongAnswer = (Math.round(Math.random() * 11)+1)*(Math.round(Math.random() * 11) + 1);
 				}
 				while(correctAnswer === wrongAnswer)
 				document.getElementById("box"+i).innerHTML = wrongAnswer;	
 				}
 			}
 		}



	
		//then our button will be a reset button hence we reload the page.
	
		
		
		
			//is time left?
				//yes-continue
				//no-game over
		//change the button to reset
		//generate a new question and mutiple answer

//PART B
//if we click the answer box
	//if we are playing
		//is it correct?
		//no
			//show try again
		//yes
			//increase score by 1
			//Show correct box for 1sec.
			//Generate new question and answers
