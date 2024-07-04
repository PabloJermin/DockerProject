# A Project On Containerization and Orchestration with Docker and ECS
# Introduction
This project is a practice on using docker, dockerhub, AWS elastic container registry (ECR) and AWS elastic container service (ECS) in provisioning, containerizing and orchestration of simple web apps.
### Version One
In this version project, a simple html login page was created in to demonstate how to create a docker image and a container from a docker file. This docker file is hosted in docker hub and available for public access.

### Version Two
In this version, a simple login page with html css was created to handle the frontend and a php script to handle the backend. The backend script intends to handle the validation of the username and password from the frontend. An error page has been created to show up incase the authentication fails. The docker file contains all dependency files needed to run the php on an apache server.

## Installation Instruction
### Version One
To run the version one application on your local machine, download the image from dockerhub into your local folder using this command 
```
docker pull donpee/webimage
```


