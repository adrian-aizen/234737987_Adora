@echo off

:menu
echo Choose one of the three shapes given: 
echo 1. Circle
echo 2. Triangle
echo 3. Quadrilateral
echo 4. Exit

choice /c 1234 /m "Choose"

if errorlevel 4 goto End
if errorlevel 3 goto Quadrilateral
if errorlevel 2 goto Triangle
if errorlevel 1 goto Circle

:Circle
cls
echo Area of a Circle
set /p radius= Enter the radius:

set /a pi= 31416
set /a area= %pi% * %radius% * %radius% / 10000
echo The area of the circle is %area%
goto menu

:Triangle
cls
echo Area of a Triangle
set /p height= Enter the height: 
set /p base= Enter the base: 

set /a area= (%base% * %height%)/2
echo The area of the triangle is %area%

if %base% equ %height% (
    echo This triangle is an equilateral triangle.
) else if %base% equ 0 (
    echo This is not a triangle.
) else if %base% equ %height% (
    echo This triangle is an iscoceles triangle.
) else (
    echo This triangle is a scalene triangle.
)
goto menu

:Quadrilateral
cls
echo Area of a Quadrilateral
set /p length = Enter the length: 
set /p width = Enter the width: 

set /a area= %length% * %width%
echo The area of the quadrilateral is %area%

if %length% equ %width% (
    echo This quadrilateral is a square.
) else (
    echo This quadrilateral is a rectangle.
) 
goto menu

:End
exit /b
