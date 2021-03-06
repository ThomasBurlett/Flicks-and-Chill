#change the powershell path to the scripts directory
$PSScriptRoot = Split-Path $MyInvocation.MyCommand.Path -Parent
cd $PSScriptRoot

#place the windows progam to run here
#makes choice for a x64 or x84 file system
Start-Process MAMP_MAMP_PRO_3.1.0.exe

#allows the program to run for the moment. so it appears for the get-process
Sleep 1

#gets the window title of the installation process for MAMP
#Get-Process |where {$_.mainWindowTItle} |format-table id,name,mainwindowtitle –AutoSize   #this one displays the window titles for the running processes
$a = Get-Process | Where-Object {$_.Name -eq "MAMP_MAMP_PRO_3.1.0.tmp"}#this gets the window name of the process

#loads visual basic for beinging forth the install window
[void] [System.Reflection.Assembly]::LoadWithPartialName("'Microsoft.VisualBasic")
#brings forth the install window 
#$a.ID is the Id number
[Microsoft.VisualBasic.Interaction]::AppActivate($a.ID)#finds the window with the correct window ID

#loads reflection assembly for doing key events
[void] [System.Reflection.Assembly]::LoadWithPartialName("'System.Windows.Forms")
#clicks enter on the window
[System.Windows.Forms.SendKeys]::SendWait("{ENTER}")
[System.Windows.Forms.SendKeys]::SendWait("{ENTER}")
[System.Windows.Forms.SendKeys]::SendWait(" ")
[System.Windows.Forms.SendKeys]::SendWait("{ENTER}")
[System.Windows.Forms.SendKeys]::SendWait("{TAB}")
[System.Windows.Forms.SendKeys]::SendWait("{UP}")
[System.Windows.Forms.SendKeys]::SendWait("{ENTER}")

#ensures that the install location is at the drives root. will make it easier to add phpmyadmin files
[System.Windows.Forms.SendKeys]::SendWait((get-location).Drive.Name + ":\MAMP")
[System.Windows.Forms.SendKeys]::SendWait("{ENTER}")
Sleep 0.5
[System.Windows.Forms.SendKeys]::SendWait("{ENTER}")
Sleep 0.5
[System.Windows.Forms.SendKeys]::SendWait("{ENTER}")
Sleep 0.5
[System.Windows.Forms.SendKeys]::SendWait("{ENTER}") 
Sleep 0.5
[System.Windows.Forms.SendKeys]::SendWait("{ENTER}") 
$check = Get-Process MAMP_MAMP_PRO_3.1.0.tmp
Sleep 2
DO{
$check = Get-Process MAMP_MAMP_PRO_3.1.0.tmp
Sleep 1
}While(!$check.HasExited)
Sleep 2
copy -Path .\Site\* -Destination ((get-location).Drive.Name + ":\MAMP\htdocs") -Recurse -Force
#copy -Path .\db -Destination ((get-location).Drive.Name + ":\MAMP") -Recurse -Force
copy -Path .\conf\* -Destination ((get-location).Drive.Name + ":\MAMP\conf") -Recurse -Force

sleep 1
C:\MAMP\MAMP.exe



