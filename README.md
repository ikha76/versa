# versa

Download the vendor zip file, open it in VScode. 
once all the file is load, run php artisan serve in terminal
while the the serve command run, open second terminal and run php artisan number:replace. This will run the command and generate the output.json file.
Check the terminal output to see the message confirming the successful generation of the output.json file and the file path where it is saved.
output.json can be access in storage/app. 

Keep in mind that the Laravel development server must remain running in the first terminal window in order for the command to be executed successfully.
