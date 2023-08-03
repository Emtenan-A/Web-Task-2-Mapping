# Web-Task-2-Mapping

## The Second task for the Web department is to control the movement for the Robot

The HTML code is a web page that displays a remote control interface for a robot. It includes five directional buttons for controlling the movement of the robot - Forward, Left, Stop, Right, and Backward. When a user clicks on any of these buttons, it calls the `move()` function to draw a line segment on a canvas element to show the path of the robot's movement. Additionally, the code includes JavaScript that sends the direction of the button clicked to a PHP script using an XMLHttpRequest.

The PHP code receives the direction of the button clicked from the JavaScript code as a GET parameter. It then connects to a MySQL database and inserts the direction value into the "robotmovement" table. The direction value is sanitized to prevent SQL injection attacks.

In summary, the HTML code provides the remote control interface for the robot and sends the direction of the button clicked to the server using JavaScript, while the PHP code receives the direction value and stores it in a MySQL database.

## The Website Page Before Movement
![Website-Mapping](https://github.com/Emtenan-A/Web-Task-2-Mapping/assets/139411172/8ae0c9da-0287-4f2a-a386-3b85a0ceb852)

## The Website Page During Movement 
https://github.com/Emtenan-A/Web-Task-2-Mapping/assets/139411172/e53b85ef-1bdc-43fb-a712-00ff4414c40f


## The Website Page After Movement
![Website-Mapping-After](https://github.com/Emtenan-A/Web-Task-2-Mapping/assets/139411172/eb8080b6-6ae1-4f4a-8ea8-620d33035ced)


