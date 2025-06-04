# Use official PHP + Apache image from Docker Hub
FROM php:8.2-apache

# Copy all project files into Apache's web root
COPY . /var/www/html/

# Expose port 80 (used by Render automatically)
EXPOSE 80
