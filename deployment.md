# Deployment and Development Workflow

This document outlines the workflow for developing and deploying theme updates for our website project. We leverage WordPress, Git version control on GitHub, Docker for local development, Trello for project management, Discord/Slack for communication, Azure App Service for staging, and AWS LightSail for production.

### Project Management
- **Trello**
    - We use Trello boards to organize tasks, bugs, and feature requests.
    - Create cards for each development task with detailed descriptions and checklists.
    - Assign cards to developers and track progress within Trello.
    - Utilize communication tools (Discord/Slack) for discussions related to tasks.

### Local Development with Docker

1. **Start the Local Development Environment**

    - Do a quick overview of [Docker-Compose](https://docs.docker.com/compose) 
    - When you are ready to dive in and install docker and docker-compose, follow this [Quickstart: Compose and WordPress tutorial](https://github.com/docker/awesome-compose/tree/master/official-documentation-samples/wordpress/) to set up your own local environment. Use the provided `docker-compose.yml` from the repository.

    - Create a Folder for the project and open it to your IDE we used [PhpStorm](https://www.jetbrains.com/phpstorm/download/#section=windows)

    - Download `docker-compose.yml` from [CP3402/project-team6](https://GitHub.com/cp3402-students/project-team6/blob/main/docker-compose.yml), and save it from the project folder.

    - Run `docker-compose up -d` to start the development environment with WordPress and database.

    - Access your local WordPress site at `http://localhost:8080`.
    
2. **Clone the Repository**

    - Make sure you have [Git](https://git-scm.com/downloads) installed.
    - Clone the project repository from GitHub using
        - `git clone https://GitHub.com/cp3402-students/project-team6.git`
    - Navigate to the project directory using `cd [./../U3Aonline]`.

3. **Theme Development**

    - The WordPress themes files are located in the `[./../wp-content/themes/underscores]` directory.
    - Use PhpStorm to modify theme files.
    - Utilize Git Branching for development.

4. **Testing**

    - Test the theme changes thoroughly on your local site by using the *work in the browser* method. Ensure that everything looks and functions as expected.
    - Use PhPStorm's debugging tools and browser developer tools to inspect code and identify issues.

### Version Control using Git

1. **Branching Strategy**
    
    - We recommend using a Git branching strategy. Before making any changes, create a new branch for the theme updates. This will keep your work separate from the main branch.
    - Create a dedicated branch (e.g., `feature/your_feature_name`) for each feature or bug fix using `git checkout -b feature/your_feature_name`.
    - Develop and test your changes on the feature branch.

2. **Committing Changes**

    - Regularly commit the changes to your local branch with meaningful commit messages using `git commit -m "Your descriptive commit message"`.

3. **Pushing to GitHub**

    - Once your testing is complete, push the changes to your feature branch using `git push origin feature/your_feature_name`.

4. **Pull Request**

    - Create a pull request on GitHub to propose your changes for merging into the `main` development branch.
    - Include clear descriptions of the changes and reference-related Trello cards if any.
    - Reviewers can provide feedback and suggest modifications before merging.

### Deployment Process

1. **Staging Environment - (AWS LightSail)**
    
    - We maintain a staging environment hosted on Amazon Web Service - LightSail. ([http://3.27.98.5/](http://3.27.98.5/))
    - Once a pull request is approved, merge the feature branch into a dedicated branch (e.g., staging) for deployment to staging.

2. **Deployment Automation (optional)**

    - Consider using a continuous integration/continuous delivery (CI/CD) tool to automate deployments. GitHub has its own [GitHub Actions](https://GitHub.com/features/actions). 

3. **Deployment Manual**

    - If not using CI/CD, manually deploy changes to staging by:
        - Export the theme folder from your local environment.
        - Uploading and activating the updated theme folder to the staging environment on its WordPress Admin Dashboard.
4. **Testing Staging**

    - Thoroughly test all functionalities and visual aspects of your theme changes in the staging environment.
    - Ensure compatibility with existing plugins and content.
    - Utilize Trello cards to track testing progress and address any issues.

5. **Productions Deployment (AWS LightSail)**

    - Once everything is verified in staging, merge the `staging` branch into the `main` branch on GitHub.
    - The steps on deploying to our production site will be like to as deploying to staging (manually or through CI/CD). Keep in mind that the deployment target will be the AWS LightSail instance. ([http://3.105.251.55](http://3.105.251.55)](http://3.105.251.55))
