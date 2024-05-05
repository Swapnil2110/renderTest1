# Use the official PHP image as a base
FROM php:7.4-cli

# Set the working directory in the container
WORKDIR /usr/src/app

# Copy the current directory contents into the container at /usr/src/app
COPY . .

# Expose port 8080 to the outside world
EXPOSE 8080

# Run the PHP server command when the container launches
CMD ["php", "-S", "0.0.0.0:8080", "-t", "."]

