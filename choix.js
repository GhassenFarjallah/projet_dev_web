let button1 = document.getElementById('button1');
let audio1 = new Audio();
audio1.src = 'music_sos.mp3';


button1.addEventListener('click', function(){

  /*audio1.addEventListener('playing',function(){
    if (button1.innerText == 'pause'){
      button1.innerText = 'pause';
    }
    button1.innerText = 'playing';

  })*/
  if (audio1.paused) {
    audio1.play();
    button1.innerText = 'playing';
  } else {
    audio1.pause();
    button1.innerText = 'pause';
  }
  audio1.addEventListener('ended',function(){
    button1.innerText = 'ended';
  })
  audio1.addEventListener('pause',function(){
    if (button1.innerText == 'playing'){
      button1.innerText = 'pause';
  }
    });
  //audio1.addEventListener('wheel')
  /*
  my work for contact page for ghazi:
  <label for="text">Name:&nbsp;</label><input type="text">  
  <label for="password">password:&nbsp;</label><input type="password">  
  </label><input type="radio">  
  </label><input type="checkbox">  
  <input type="hidden">  
   <label >time:&nbsp;</label><input type="time">  
   <input type="submit">   
   <input type="reset">  
   <br>
   <label for="text">tel:&nbsp;</label><input type="tel">  
   <input type="search">
   <br>   
   <label for="text">Week:&nbsp;</label><input type="week">
   <br>
   <input type="range">   
   <input type="month">   
   <br>
   <label for="text">email:&nbsp;</label><input id="email-input" type="email" name="email-inputted" 
   placeholder="placeholder-text" >
   <label>DateBirth:&nbsp;</label><input type="date" value="08/05/1996">
   <button type="submit">Submit</button>   

   .middle_side input[type="text"],
.middle_side input[type="password"],
.middle_side input[type="radio"],
.middle_side input[type="checkbox"],
.middle_side input[type="hidden"],
.middle_side input[type="time"],
.middle_side input[type="tel"],
.middle_side input[type="search"],
.middle_side input[type="week"],
.middle_side input[type="range"],
.middle_side input[type="month"],
.middle_side input[type="email"],
.middle_side input[type="date"] {
  font-size: 1.2rem;
  padding: 0.5rem;
  margin-bottom: 0.5rem;
  border-radius: 5px;
  border: 1px solid #ccc;
}

.middle_side label {
  margin-right: 0.5rem;
}
 .middle_side {
  margin-top: 45px;
  margin-left: 40%;
  width:35%;
  position:absolute; 
  display: flex;
  flex-direction: column;
  gap: 1rem;
}  */
})
