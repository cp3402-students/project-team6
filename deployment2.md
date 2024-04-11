# Deployment and Development Workflow

This document outlines the workflow for developing and deploying theme updates for our website project. We leverage WordPress, Git version control on Github, Docker for local development, Trello for project management, Discord/Slack for communication, Azure App Service for staging, and AWS Lightsail for production.

### Project Management
- **Trello**
    - We use Trello boards to organize tasks, bugs, and feature requests.
    - Create cards for each development task with detailed descriptions and checklists.
    - Assign cards to developers and track progress within Trello.
    - Utilize communication tools (Discord/Slack) for discussions related to tasks.

### Local Development with Docker

1. **Start the Local Development Environment**

    - Do a quick overview of [Docker-Compose](https://docs.docker.com/compose) 
    - When you are ready to dive in and install docker and docker-compose. 
Follow this [Quickstart: Compose and Wordpress tutorial](https://github.com/docker/awesome-compose/tree/master/official-documentation-samples/wordpress/) to setup your own local environment. Use the provided `docker-compose.yml` from the repository.

    - Create Folder for the project and open it to your IDE we used [PhpStom](https://www.jetbrains.com/phpstorm/download/#section=windows)

    - Download `docker-compose.yml` from [CP3402/project-team6](https://github.com/cp3402-students/project-team6/blob/main/docker-compose.yml), save it from the project folder.

    - Run `docker-compose up -d` to start the development environment with WordPress and database.

    - Access your local WordPress site at `http://localhost:8080`.
    
2. **Clone the Repository**

    - Ensure you have [Git](https://git-scm.com/downloads) installed.
    - Clone the project repository from Github using
        - `git clone https://github.com/cp3402-students/project-team6.git`
    - Navigate to the project directory using `cd [./../U3Aonline]`.

3. **Theme Development**

    - The Wordpress themes files are located in the `[./../wp-content/themes/underscores]` directory.
    - Use PhpStorm to modify theme files.
    - Utilize Git Branching for development.

4. **Testing**

    - Test the theme changes thorougly on your local site by using *work in the browser* method. Ensure that everything looks and functions as expected.
    - Use PhPStorm's debugging tools and browser developer tools to inspect code and identify issues.