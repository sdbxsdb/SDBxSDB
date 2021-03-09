//SELECT THE CANVAS
const canvas = document.getElementById("pong");
const context = canvas.getContext("2d");

//CREATE THE USER PADDLE
const user = {
  x: 30,
  y: canvas.height / 2 - 50,
  width: 20,
  height: 100,
  color: "white",
  score: 0
}

//CREATE THE COMPUTER PADDLE
const comp = {
  x: canvas.width - 50,
  y: canvas.height / 2 - 50,
  width: 20,
  height: 100,
  color: "white",
  score: 0
}

//CREATE THE BALL
const ball = {
  x: canvas.width / 2,
  y: canvas.height / 2,
  radius: 10,
  speed: 5,
  velocityX: 5,
  velocityY: 5,
  color: "rgb(0, 183, 255)"
}

//CREATE THE NET
const net = {
  x: canvas.width / 2 - 1,
  y: 0,
  width: 2,
  height: 10,
  color: "white"
}

//DRAW RECTANGLES
function drawRect(x, y, w, h, color) {
  context.fillStyle = color;
  context.fillRect(x, y, w, h);
}
drawRect(0, 0, canvas.width, canvas.height, "black")

//DRAW THE NET
function drawNet() {
  for (let i = 0; i <= canvas.height; i += 15) {
    drawRect(net.x, net.y + i, net.width, net.height, net.color);
  }
}

//DRAW CIRCLE
function drawCircle(x, y, r, color) {
  context.fillStyle = color;
  context.beginPath();
  context.arc(x, y, r, 0, Math.PI * 2, false);
  context.closePath();
  context.fill();
}

//DRAW START GAME
function startGame(text, x, y, color) {
  context.fillStyle = color;
  context.font = "45px Helvetica";
  context.fillText(text, x, y);
}

//DRAW TEXT
function drawText(text, x, y, color) {
  context.fillStyle = color;
  context.font = "45px Helvetica";
  context.fillText(text, x, y);
}




//RENDER THE GAME
function render() {
  //CLEAR THE CANVAS
  drawRect(0, 0, canvas.width, canvas.height, "black");

  //DRAW THE NET
  drawNet();

  //DRAW SCORE
  drawText(user.score, canvas.width / 4, canvas.height / 5, "white");
  drawText(comp.score, 3 * canvas.width / 4, canvas.height / 5, "white");

  //DRAW USER AND COMP PADDLES
  drawRect(user.x, user.y, user.width, user.height, user.color);
  drawRect(comp.x, comp.y, comp.width, comp.height, comp.color);

  //DRAW THE BALL
  drawCircle(ball.x, ball.y, ball.radius, ball.color);
}


//CONTROL THE USER PADDLE
canvas.addEventListener("mousemove", movePaddle);


function movePaddle(evt) {
  let rect = canvas.getBoundingClientRect();

  user.y = evt.clientY - rect.top - user.height / 2;
}

//COLLISION DETECTION
function collision(b, p) {
  b.top = b.y - b.radius;
  b.bottom = b.y + b.radius;
  b.left = b.x - b.radius;
  b.right = b.x + b.radius;

  p.top = p.y;
  p.bottom = p.y + p.height;
  p.left = p.x;
  p.right = p.x + p.width;

  //(return) IF THE BELOW IS TRUE FIRE THIS FUNCTION
  return b.right > p.left && b.bottom > p.top && b.left < p.right && b.top < p.bottom;
}

//RESET ON SCORE 
function resetBall() {
  ball.x = canvas.width / 2;
  ball.y = canvas.height / 2;
  ball.speed = 2;
  ball.velocityX = 2;
  ball.velocityY = 2;
}


//STARTING GAME ON CLICK
document.getElementById("startGame").onclick = function () {
  //HIDING THE START BUTTON AND CURSOR TO NORMAL
  (this).style.cssText = "display: none;";
  document.getElementById("moveMouse").style.cssText = "display: none;";

  //UPDATE : POSITION, MOVEMENT, SCORE ETC...
  function update() {
    ball.x += ball.velocityX;
    ball.y += ball.velocityY;

    //A SIMPLE AI TO CONTROL THE COMP PADDLE
    let computerLevel = 0.1;
    comp.y += (ball.y - (comp.y + comp.height / 2)) * computerLevel;

    if (ball.y + ball.radius > canvas.height || ball.y - ball.radius < 0) {
      ball.velocityY = -ball.velocityY;
    }

    //if the ball is less than the canvas width divided by 2 its "user" else "computer"
    let player = (ball.x < canvas.width / 2 ? user : comp);


    if (collision(ball, player)) {
      ball.velocityX = -ball.velocityX;
      //SEE WHERE THE BALL HIT THE PLAYER
      let collidePoint = ball.y - (player.y + player.height / 2);

      //NORMALISATION
      collidePoint = collidePoint / (player.height / 2);

      //CALCULATE ANGLE IN RADIAN
      let angleRad = collidePoint * Math.PI / 4;

      // X DIRECTION OF THE BALL WHEN HIT - If the ball is hit on the left the direction is positive, else negitive
      let direction = (ball.x < canvas.width / 2) ? 1 : -1;

      //CHANGE VELOCITY X AND Y BASED ON ANGLE
      ball.velocityX = direction * ball.speed * Math.cos(angleRad);
      ball.velocityY = ball.speed * Math.sin(angleRad);

      //EVERY TIME THE BALL HITS A PADDLE WE INCREASE THE SPEED
      ball.speed += 1.5;
    }

    if (ball.x - ball.radius < 0) {
      //COMPUTER SCORES
      comp.score++;
      resetBall();
    } else if (ball.x + ball.radius > canvas.width) {
      //USER SCORES
      user.score++;
      resetBall();
    }

  }

  //GAME START
  function game() {
    update();
    render();
  }

  //LOOP
  const framesPerSecond = 50;
  setInterval(game, 1000 / framesPerSecond);

};


//TAKE ME TO THE HOME PAGE
document.getElementById("gamePageBtn").onclick = function () {
  location.href = "/home.php";
};



