No — the site never watches YouTube. Uploading a video does nothing to it. The flow is:

Upload your video to YouTube as normal
Open index.html, add one line at the top of the EPISODES array (number, guest, topic, the three links)
Commit — footer changelog updates itself from your commit message, and the page rebuilds Latest / archive wall / full list from the array on every visitor's load
That manual line is also your answer on clips: the site only shows what you put in the array, so shorts, clips, and trailers on your channel never leak in. A fully automatic version (reading your channel's feed) is possible but can't reliably tell a 90-second clip from a 2-hour episode — you'd have to tag titles with a convention like "EP 016:", and it'd need a small proxy service since YouTube blocks direct browser fetches. The one-line-per-episode approach is the robust version.

Also: I've hit my usage limit, so pausing here — you have the launch file already.
