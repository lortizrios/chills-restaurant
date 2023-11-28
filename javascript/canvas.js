document.addEventListener('DOMContentLoaded',()=>{
//code here 
// This event listener is triggered when the DOM content has been fully loaded. It ensures that the script runs after the HTML has been parsed.
const canvas=document.getElementById('snowfall');
const context=canvas.getContext('2d');
 

canvas.width=window.innerWidth
canvas.height=window.innerHeight;
const snowflakes=[];

function random(min,max){
    return Math.floor(Math.random()*(max-min+1)+min);
}

for (let i = 0; i < 100; i++) {
    snowflakes.push({
      x: random(0, canvas.width),
      y: random(0, canvas.height),
      radius: random(2, 4),
      speed: random(1, 3),
    });
  }


  function drawSnowflakes() {
    context.clearRect(0, 0, canvas.width, canvas.height);

    for (const snowflake of snowflakes) {
      context.beginPath();
      context.arc(snowflake.x, snowflake.y, snowflake.radius, 0, Math.PI * 2);
      context.fillStyle = '#fff';
      context.fill();
      context.closePath();

      snowflake.y += snowflake.speed;

      if (snowflake.y > canvas.height) {
        snowflake.y = 0;
        snowflake.x = random(0, canvas.width);
      }
    }

    requestAnimationFrame(drawSnowflakes);
  }

  drawSnowflakes();

  window.addEventListener('resize', function() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
  });
});
