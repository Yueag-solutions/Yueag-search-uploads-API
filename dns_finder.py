import sys
import socket

def get_dns_and_ip(domain):
    try:
        ip_address = socket.gethostbyname(domain)
        dns_info = socket.gethostbyname_ex(domain)
        return ip_address, dns_info
    except socket.gaierror:
        return None, None

if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Utilisation : python dns_finder.py url_domaine_cible")
    else:
        domain = sys.argv[1]
        ip, dns = get_dns_and_ip(domain)
        if ip and dns:
            print(f"DNS de {domain}: {dns}")
            print(f"IP de {domain}: {ip}")
        else:
            print(f"Impossible d'obtenir les DNS et l'IP de {domain}")
