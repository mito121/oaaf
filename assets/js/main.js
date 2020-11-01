// Redirect to https
if (location.protocol !== 'https:') {
   location.replace(`https:${location.href.substring(location.protocol.length)}`);
}

/* ### Initiate Vue instance ### */
