import generate_ip_excel
import generate_zone
import generate_named
import generate_vhost
kursNr = '240617'
network = '10.101.111'
excel_file = f'{kursNr}.xlsx'
domain = 'web.bbq'
ip_start = 100
ip_step = 1
ip = 240
yourdomain = 'www.manuel.web.bbq'
generate_ip_excel.genExcel(excel_file, domain, ip_start, ip_step, network)
generate_zone.generate_zone(domain, excel_file, network, ip)
generate_named.generate_named_conf(domain)
generate_vhost.generate_vhost(yourdomain)
