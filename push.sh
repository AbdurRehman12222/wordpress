#!/bin/bash

# Replace these variables with your GitHub username and repository name
GITHUB_USERNAME="YourGitHubUsername"
REPO_NAME="wordpress"

# GitHub repository URL
REPO_URL="https://github.com/$GITHUB_USERNAME/$REPO_NAME.git"

# Set correct ownership and permissions
chown -R $(whoami):$(whoami) /var/www/html/wordpress
find /var/www/html/wordpress -type d -exec chmod 755 {} \;
find /var/www/html/wordpress -type f -exec chmod 644 {} \;

# Initialize a Git repository (if not already initialized)
cd /var/www/html/wordpress
git init
git remote add origin "$REPO_URL"

# Add all files to the staging area
git add .

# Commit changes
git commit -m "Initial commit"

# Push to GitHub
git push -u origin main  # Assuming the default branch is 'main'

echo "Code pushed to GitHub repository: $REPO_URL"
