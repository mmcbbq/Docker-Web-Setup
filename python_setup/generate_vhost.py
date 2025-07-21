def generate_vhost(yourdomain):
    vhost = open('../apache/vhost-test.conf','w')
    vhost.write(f'''
    <VirtualHost *:80>
    # Hier deine URL Eintragen
        ServerName {yourdomain}
    
        DocumentRoot "/usr/local/apache2/htdocs/public"
        <Directory "/usr/local/apache2/htdocs/public">
            Require all granted
            AllowOverride All
            Options FollowSymLinks
        </Directory>
    
        ProxyPassMatch ^/(.*\.php)$ fcgi://php:9000/usr/local/apache2/htdocs/public/$1
        ErrorLog /dev/stdout
        CustomLog /dev/stdout combined
    </VirtualHost>
    
    ''')
