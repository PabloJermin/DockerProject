# A Project On Containerization and Orchestration with Docker and ECS

This project is a practice on docker, dockerhub, AWS elastic container registry (ECR) and AWS elastic container service (ECS) in provisioning, containerizing and orchestration of simple web apps.
### Version One
In this version project, a simple html login page was created in to demonstate how to create a docker image and a container from a docker file. This docker file is hosted in docker hub and available for public access.

### Version Two
In this version, a simple login page with html css was created to handle the frontend and a php script to handle the backend. The backend script intends to handle the validation of the username and password from the frontend. An error page has been created to show up incase the authentication fails. The docker file contains all dependency files needed to run the php on an apache server.

## Installation Instruction
To run the version one application on your local machine;
* Download and install  the docker desktop onto your local machine from the official [docker website](https://www.docker.com/products/docker-desktop/).

* Download the image from dockerhub into your local folder using this command 
    ### Version One
    ```
        docker pull donpee/webimage
     ```
    ### Version Two
    ```
        docker pull donpee/phprepo
     ```
   
* Run the following command to run the container on port 80 of your local machine.

    ### Version One
    ```
        docker run -d -p 80:80 webimage
    ```

    ### Version Two
     ```
        docker run -d -p 80:80 phpimage
    ```
## Usage Instructions
Open your browser and run the application on port 80 of your localhost like this:
    ```
        localhost:80
    ```

![An image showing an app running on localhost port 80](<images/Screenshot (30).png>)

## Hosting on AWS
Login to your AWS account and navigate to the Elastic Container Registry. 
- Create a repository and follow the push procedure to push the image into the repository.
![A photo of an image uploaded into amazon ECR](<Screenshot (48).png>)
- Create a cluster in amazon ECS with a prefered name.![An image of a created cluster](<Screenshot (33).png>)

- Create a task definition and specify the kind of instances you would want to provision your application on (fargate or EC2).![alt text](<Screenshot (49).png>)

- Create your service from the task definition already created
 ![alt text](<Screenshot (50).png>)

- Click on the task to see your provisioned instance(s) as shown below.![An image showing provisioned instance in the task](<Screenshot (36).png>)

- Access the application from each instance through the public ip address drivided for each instance.


## Features
Subsequent versions shall have sleek features. Additional functionalities will be added to the webpage

## Acknowledgement
A  heartfelt appreciation goes out to AzibiAfrica and getInnotized for the intense training on AWS. Also a sincere ackowledgement to my group members and friends for the encouragement and great teamworking skills they provided to me.