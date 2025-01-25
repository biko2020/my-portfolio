<?php
define('BASE_DIR', dirname(__DIR__) . '/');
session_start();

// Check if a language is selected via URL
if (isset($_GET['lang'])) {
    $selected_lang = $_GET['lang'];
    // Validate the selected language
    if (in_array($selected_lang, ['en', 'fr'])) {
        $_SESSION['lang'] = $selected_lang; // Update the session variable
    }
    
    // Get the current page URL without query parameters
    $current_page = strtok($_SERVER["REQUEST_URI"], '?');
    
    // Redirect back to the current page
    header("Location: " . $current_page);
    exit();
}

// Set the default language if not already set
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';

// Include configuration and necessary files
// require_once BASE_DIR . '/config.php';
require_once BASE_DIR . '../includes/lang/' . $lang . '.php';

?>


<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $lang_data['page_title']; ?>
  </title>
  <link rel="stylesheet" href="../../assets/css/styles.css">
  <link rel="stylesheet" href="../../assets/css/formations.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="icon" type="image/png" href="../../assets/images/favicon.png" />

</head>

<body>

  <div id="wrapper">
    <!-- Add scroll to top button -->
    <div id="scroll-to-top">
      <i class="fas fa-chevron-up"></i>
    </div>
    <div class="site-content">
      <?php require_once BASE_DIR . '../includes/header.php';?>

      <header class="banner">
        <img src="../../assets/images/bg_animate_01_small.jpg" alt="Training Image">
        <div class="banner-text">
          <h1>
            <?php echo $lang_data['mes_formations']; ?>
          </h1>
        </div>
      </header>

        <main id="main">

            <div class="learning-container">

            <section class="learning-module">
                <div class="learning-header-row padding-top-90">
                <div class="learning-column">
                    <header class="learning-section-header">
                    <div class="learning-heading">
                        <h1 class="learning-title text-capitalize font-medium">
                        Information Gathering and Vulnerability Scanning
                        </h1>
                        <hr>
                    </div>
                    </header>
                </div>
                </div>

                <section class="learning-media padding-bottom-30">
                <div class="learning-media-row">
                    <div class="learning-media-column">
                    <img src="../../assets/images/ethical_hacking.png" alt="Ethical Hacking"
                        class="learning-image img-responsive" width="100" height="100">
                    </div>
                </div>
                </section>

                <div class="learning-description-row">
                <div class="learning-full-width">
                    <h2 class="learning-subtitle">Introduction</h2>
                    <p class="learning-description">
                    You will briefly learn about some of the common tools and techniques used. From there, the module digs
                    deeper into the process of vulnerability scanning and how scanning tools work, including how to
                    analyze vulnerability scanner results to provide useful deliverables and explore the process of
                    leveraging the gathered information in the exploitation phase. The module concludes with coverage of
                    some of the common challenges to consider when performing vulnerability scans.
                    </p>
                    <hr>
                    <h3 class="learning-subtitle">Performing Passive Reconnaissance</h3>
                    <p class="learning-description">
                    <strong>Reconnaissance:</strong> Reconnaissance is always the initial step in a cyber attack. An
                    attacker must first gather information about the target in order to be successful. In fact, the term
                    reconnaissance is widely used in the military world to describe the gathering of information about the
                    enemy, such as information about the enemy’s location, capabilities, and movements. This type of
                    information is needed to successfully perform an attack. Reconnaissance in a penetration testing
                    engagement typically consists of scanning and enumeration. But what does reconnaissance look like from
                    an attacker’s perspective?
                    </p>
                    <blockquote>
                    "If you know the enemy and know yourself, you need not fear the result of a hundred battles. If you
                    know yourself but not the enemy, for every victory gained you will also suffer a defeat. If you know
                    neither the enemy nor yourself, you will succumb in every battle."<br> — Sun Tzu, The Art of War
                    </blockquote>

                    <h2 id="ActiveReconnaissance" class="learning-subtitle">Active Reconnaissance vs. Passive Reconnaissance
                    </h2>
                    <p class="learning-description">
                    <strong>Active Reconnaissance:</strong> Active reconnaissance is a method of information gathering in
                    which the tools used actually send out probes to the target network or systems in order to elicit
                    responses that are then used to determine the posture of the network or system. These probes can use
                    various protocols and multiple levels of aggressiveness, typically based on what is being scanned and
                    when.
                    </p>

                    <ul class="learning-list">
                    <li>Host enumeration</li>
                    <li>Network enumeration</li>
                    <li>User enumeration</li>
                    <li>Group enumeration</li>
                    <li>Network share enumeration</li>
                    <li>Web page enumeration</li>
                    <li>Application enumeration</li>
                    <li>Service enumeration</li>
                    <li>Packet crafting</li>
                    </ul>

                    <p class="learning-description">
                    <strong>Passive Reconnaissance:</strong> Passive reconnaissance is a method of information gathering
                    in which the tools do not interact directly with the target device or network. There are multiple
                    methods of passive reconnaissance, such as using third-party databases, tools for eavesdropping, and
                    packet inspection.
                    </p>

                    <ul class="learning-list">
                    <li>Domain enumeration</li>
                    <li>Packet inspection</li>
                    <li>Open-source intelligence (OSINT)</li>
                    <li>Recon-ng</li>
                    <li>Eavesdropping</li>
                    </ul>

                    <h2 id="ReconTools" class="learning-subtitle">Tools for Reconnaissance</h2>
                    <p class="learning-description">
                    <strong>SpiderFoot:</strong> Designed to automate the process of gathering information from various
                    sources about a given target, which could be an IP address, domain name, hostname, network subnet, or
                    even a person's name or email address.
                    </p>

                    <ul class="learning-list">
                    <li>Domain names</li>
                    <li>IP addresses</li>
                    <li>Subnet addresses</li>
                    <li>Autonomous System Numbers (ASN)</li>
                    <li>Email addresses</li>
                    <li>Phone numbers</li>
                    <li>Personal names</li>
                    </ul>

                    <h2 id="ReconNG" class="learning-subtitle">Investigating Recon-ng</h2>
                    <p class="learning-description">
                    Recon-ng is an OSINT framework that is similar to the Metasploit exploitation framework or the
                    Social-Engineering Toolkit (SET). It consists of a series of modules that can be run in their own
                    workspaces.
                    </p>

                    <div class="console">
                    <div class="console-header">
                        <span class="console-title">Kali Linux Console</span>
                    </div>
                    <div class="console-body">
                        <code>
                    ┌──(kali㉿Kali)-[~]<br>
                    └─$ recon-ng<br>
                    [recon-ng][default] &gt; workspaces help<br>
                    [recon-ng][default] &gt; workspaces list<br>
                    [recon-ng][default] &gt; workspaces test<br>
                    [recon-ng][default] &gt; workspaces load test<br>
                    [recon-ng][test] &gt; help<br><br>
                    [recon-ng][default] &gt; modules search<br>
                    [recon-ng][default] &gt; marketplace search<br>
                    [recon-ng][default] &gt; marketplace info nmap<br>
                    [recon-ng][default] &gt; marketplace search bing<br>
                    [recon-ng][default] &gt; marketplace search whois<br><br>
                    /** Info about Module hackertarget **/<br>
                    Name: HackerTarget Lookup<br>
                    Author: Michael Henriksen (@michenriksen)<br>
                    Version: 1.1<br>
                    Description: Uses the HackerTarget.com API to find host names. Updates the 'hosts' table with the results.<br><br>
                    Options:<br>
                        Name    Current Value  Required  Description<br>
                        ------  -------------  --------  -----------<br>
                        SOURCE   default       yes      source of input (see 'info' for details)<br><br>
                    Source Options:<br>
                        default        SELECT DISTINCT domain FROM domains WHERE domain IS NOT NULL<br>
                        &lt;string&gt;       string representing a single input<br>
                        &lt;path&gt;         path to a file containing a list of inputs<br>
                        query &lt;sql&gt;    database query returning one column of inputs<br><br>
                    [recon-ng][serviceOne][hackertarget] &gt; options set source hackxor.net<br>
                    [recon-ng][serviceOne][hackertarget] &gt; run<br>
                    [recon-ng][serviceOne][hackertarget] &gt; dashboard<br>
                    [recon-ng][serviceOne][hackertarget] &gt; show hosts<br><br>
                    DNS Lookups<br>
                    ┌──(kali㉿Kali)-[~]<br>
                    └─$ dnsrecon -d h4cker.org<br><br>
                    ;; ANSWER SECTION:<br>
                    h4cker.org.             2767    IN      A       185.199.108.153<br>
                    h4cker.org.             2767    IN      A       185.199.111.153<br>
                    h4cker.org.             2767    IN      A       185.199.109.153<br>
                    h4cker.org.             2767    IN      A       185.199.110.153<br><br>
                    ┌──(kali㉿Kali)-[~]<br>
                    └─$ dig h4cker.org mx<br><br>
                    h4cker.org.             2302    IN      MX      10 alt1.gmr-smtp-in.l.google.com.<br>
                    h4cker.org.             2302    IN      MX      5 gmr-smtp-in.l.google.com.<br>
                    h4cker.org.             2302    IN      MX      40 alt4.gmr-smtp-in.l.google.com.<br>
                    h4cker.org.             2302    IN      MX      30 alt3.gmr-smtp-in.l.google.com.<br>
                    h4cker.org.             2302    IN      MX      20 alt2.gmr-smtp-in.l.google.com.<br><br>
                    Identification of Technical and Administrative Contacts<br>
                    ┌──(kali㉿Kali)-[~]<br>
                    └─$ whois tesla.com<br><br>
                    ┌──(kali㉿Kali)-[~]<br>
                    └─$ whois cisco.com | grep '@cisco.com'<br><br>
                    Registrant Email: infosec@cisco.com<br>
                    Admin Email: infosec@cisco.com<br>
                    Tech Email: infosec@cisco.com<br><br>
                    Various tools of passive reconnaissance listed in Omar Santos' GitHub repository at https://github.com/The-Art-of-Hacking/h4cker/tree/master/osint.<br><br>
                    Use nslookup to Obtain Domain and IP Address Information<br>
                    ┌──(kali㉿Kali)-[~]<br>
                    └─$ nslookup -query=mx cisco.com<br><br>
                    ┌──(kali㉿Kali)-[~]<br>
                    └─$ nslookup -query=ns cisco.com<br><br>
                    Find IPv4 and IPv6 Addresses of the server ns1<br>
                    ┌──(kali㉿Kali)-[~]<br>
                    └─$ nslookup -type=a ns1.cisco.com<br><br>
                    Find IPv6<br>
                    ┌──(kali㉿Kali)-[~]<br>
                    └─$ nslookup -type=aaaa ns1.cisco.com<br>
                    </code>
                    </div>
                    </div>
                </div>
                </div>

                
                <div class="learning-description-row">
                <div class="learning-full-width">
                    <h3 class="learning-subtitle">Performing Passive Reconnaissance</h3>
                    <p class="learning-description">
                    <strong>Reconnaissance:</strong> Reconnaissance is always the initial step in a cyber attack. An
                    attacker must first gather information about the target in order to be successful. In fact, the term
                    reconnaissance is widely used in the military world to describe the gathering of information about the
                    enemy, such as information about the enemy’s location, capabilities, and movements. This type of
                    information is needed to successfully perform an attack. Reconnaissance in a penetration testing
                    engagement typically consists of scanning and enumeration. But what does reconnaissance look like from
                    an attacker’s perspective?
                    </p>
                    <blockquote>
                    "If you know the enemy and know yourself, you need not fear the result of a hundred battles. If you
                    know yourself but not the enemy, for every victory gained you will also suffer a defeat. If you know
                    neither the enemy nor yourself, you will succumb in every battle."<br> — Sun Tzu, The Art of War
                    </blockquote>

                    <h2 id="ActiveReconnaissance" class="learning-subtitle">Active Reconnaissance vs. Passive Reconnaissance
                    </h2>
                    <p class="learning-description">
                    <strong>Active Reconnaissance:</strong> Active reconnaissance is a method of information gathering in
                    which the tools used actually send out probes to the target network or systems in order to elicit
                    responses that are then used to determine the posture of the network or system. These probes can use
                    various protocols and multiple levels of aggressiveness, typically based on what is being scanned and
                    when.
                    </p>

                    <ul class="learning-list">
                    <li>Host enumeration</li>
                    <li>Network enumeration</li>
                    <li>User enumeration</li>
                    <li>Group enumeration</li>
                    <li>Network share enumeration</li>
                    <li>Web page enumeration</li>
                    <li>Application enumeration</li>
                    <li>Service enumeration</li>
                    <li>Packet crafting</li>
                    </ul>

                    <p class="learning-description">
                    <strong>Passive Reconnaissance:</strong> Passive reconnaissance is a method of information gathering
                    in which the tools do not interact directly with the target device or network. There are multiple
                    methods of passive reconnaissance, such as using third-party databases, tools for eavesdropping, and
                    packet inspection.
                    </p>

                    <ul class="learning-list">
                    <li>Domain enumeration</li>
                    <li>Packet inspection</li>
                    <li>Open-source intelligence (OSINT)</li>
                    <li>Recon-ng</li>
                    <li>Eavesdropping</li>
                    </ul>

                    <h2 id="ReconTools" class="learning-subtitle">Tools for Reconnaissance</h2>
                    <p class="learning-description">
                    <strong>SpiderFoot:</strong> Designed to automate the process of gathering information from various
                    sources about a given target, which could be an IP address, domain name, hostname, network subnet, or
                    even a person's name or email address.
                    </p>

                    <ul class="learning-list">
                    <li>Domain names</li>
                    <li>IP addresses</li>
                    <li>Subnet addresses</li>
                    <li>Autonomous System Numbers (ASN)</li>
                    <li>Email addresses</li>
                    <li>Phone numbers</li>
                    <li>Personal names</li>
                    </ul>

                    <h2 id="ReconNG" class="learning-subtitle">Investigating Recon-ng</h2>
                    <p class="learning-description">
                    Recon-ng is an OSINT framework that is similar to the Metasploit exploitation framework or the
                    Social-Engineering Toolkit (SET). It consists of a series of modules that can be run in their own
                    workspaces.
                    </p>

                    <div class="console">
                    <div class="console-header">
                        <span class="console-title">Kali Linux Console</span>
                    </div>
                    <div class="console-body">
                        <code>
                    ┌──(kali㉿Kali)-[~]<br>
                    └─$ recon-ng<br>
                    [recon-ng][default] &gt; workspaces help<br>
                    [recon-ng][default] &gt; workspaces list<br>
                    [recon-ng][default] &gt; workspaces test<br>
                    [recon-ng][default] &gt; workspaces load test<br>
                    [recon-ng][test] &gt; help<br><br>
                    [recon-ng][default] &gt; modules search<br>
                    [recon-ng][default] &gt; marketplace search<br>
                    [recon-ng][default] &gt; marketplace info nmap<br>
                    [recon-ng][default] &gt; marketplace search bing<br>
                    [recon-ng][default] &gt; marketplace search whois<br><br>
                    /** Info about Module hackertarget **/<br>
                    Name: HackerTarget Lookup<br>
                    Author: Michael Henriksen (@michenriksen)<br>
                    Version: 1.1<br>
                    Description: Uses the HackerTarget.com API to find host names. Updates the 'hosts' table with the results.<br><br>
                    Options:<br>
                        Name    Current Value  Required  Description<br>
                        ------  -------------  --------  -----------<br>
                        SOURCE   default       yes      source of input (see 'info' for details)<br><br>
                    Source Options:<br>
                        default        SELECT DISTINCT domain FROM domains WHERE domain IS NOT NULL<br>
                        &lt;string&gt;       string representing a single input<br>
                        &lt;path&gt;         path to a file containing a list of inputs<br>
                        query &lt;sql&gt;    database query returning one column of inputs<br><br>
                    [recon-ng][serviceOne][hackertarget] &gt; options set source hackxor.net<br>
                    [recon-ng][serviceOne][hackertarget] &gt; run<br>
                    [recon-ng][serviceOne][hackertarget] &gt; dashboard<br>
                    [recon-ng][serviceOne][hackertarget] &gt; show hosts<br><br>
                    DNS Lookups<br>
                    ┌──(kali㉿Kali)-[~]<br>
                    └─$ dnsrecon -d h4cker.org<br><br>
                    ;; ANSWER SECTION:<br>
                    h4cker.org.             2767    IN      A       185.199.108.153<br>
                    h4cker.org.             2767    IN      A       185.199.111.153<br>
                    h4cker.org.             2767    IN      A       185.199.109.153<br>
                    h4cker.org.             2767    IN      A       185.199.110.153<br><br>
                    ┌──(kali㉿Kali)-[~]<br>
                    └─$ dig h4cker.org mx<br><br>
                    h4cker.org.             2302    IN      MX      10 alt1.gmr-smtp-in.l.google.com.<br>
                    h4cker.org.             2302    IN      MX      5 gmr-smtp-in.l.google.com.<br>
                    h4cker.org.             2302    IN      MX      40 alt4.gmr-smtp-in.l.google.com.<br>
                    h4cker.org.             2302    IN      MX      30 alt3.gmr-smtp-in.l.google.com.<br>
                    h4cker.org.             2302    IN      MX      20 alt2.gmr-smtp-in.l.google.com.<br><br>
                    Using a Different DNS Server<br>
                    ┌──(kali㉿Kali)-[~]<br>
                    └─$ nslookup<br>
                        &gt; server 8.8.8.8<br>
                        &gt; set type=any<br>
                        &gt; skillsforall.com<br><br>
                    Reverse DNS Lookups<br>
                    ┌──(kali㉿Kali)-[~]<br>
                    └─$ dig -x 72.163.5.201<br><br>
                    Whois Commands<br>
                    ┌──(kali㉿Kali)-[~]<br>
                    └─$ whois cisco.com<br><br>
                    Comparing dig and nslookup<br>
                    ┌──(kali㉿Kali)-[~]<br>
                    └─$ dig cisco.com<br>
                    └─$ nslookup -type=any skillsforall.com<br>
                    </code>
                    </div>
                    </div>
                </div>
                </div>
            </section>

            </div>
        </main>

      <?php
require_once BASE_DIR . '../includes/footer.php';
?>
    </div>
  </div>
  <script src="../../assets/js/main.js"></script>
  <script src="../../assets/js/formations.js"></script>
</body>

</html>