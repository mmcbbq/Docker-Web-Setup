def generate_named_conf(domain):
    named = open('../bind/named.conf.docker-zones', 'w')
    named.write(f'''zone "{domain}"in {{
	type master;
	file "/var/lib/bind/{domain}.fwd";
	}};''')