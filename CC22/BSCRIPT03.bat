@echo off

:menu
echo 1. IP Config
echo 2. Task list
echo 3. Chkdsk
echo 4. Format
echo 5. Defrag
echo 6. Find
echo 7. Attrib
echo.
echo 0. Exit

choice /c 12345670 /m "Choose"

if errorlevel 7 goto Attrib
if errorlevel 6 goto Find
if errorlevel 5 goto Defrag
if errorlevel 4 goto Format
if errorlevel 3 goto Chkdsk
if errorlevel 2 goto Tasklist
if errorlevel 1 goto IPConfig
if errorlevel 0 goto Exit

:IPConfig
echo Running IP Config...
ipconfig
pause
goto menu

:Tasklist
echo Running Task list...
tasklist
pause
goto menu

:Chkdsk
echo Running Chkdsk...
set /p DriveInput=Enter the drive letter you want to check:
if '%DriveInput%'=='' goto ChkdskError
echo Checking drive %DriveInput%...
chkdsk %DriveInput%
pause
goto menu

:ChkdskError
echo Error: Please enter a valid drive letter.
pause
goto MENU

:Format
echo Running Format...
set /p driveInput = Enter the drive letter you want to format:
if '%driveInput% '=='' goto FormatError
echo Formatting drive %driveInput%
format %driveInput%
pause
goto menu

:FormatError
echo Error: Please enter a valid drive letter.
pause
goto menu

:Defrag
echo Running Defrag...
defrag C:
pause
goto menu

:Find
echo Running Find...
set /p findInput = Enter the text you want to find: 
if '%findInput%'=='' goto FindError
echo Searching for %findInput%...
find %findInput%*.txt
pause
goto menu

:FindError
echo Error: Please enter a valid text string.
pause
goto menu

:Attrib
echo Running Attrib...
attrib
pause
goto menu

:Exit
echo Exiting...
exit
