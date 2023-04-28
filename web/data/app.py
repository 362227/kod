import streamlit as st
import subprocess

st.title("yt-dlp Downloader")

url = st.text_input("Enter the URL you want to download:", "https://www.youtube.com/watch?v=dQw4w9WgXcQ")
output = st.empty()

if st.button("Download"):
    with st.spinner("Downloading..."):
        cmd = f"yt-dlp {url} -o '%(title)s.%(ext)s'"
        result = subprocess.run(cmd, stdout=subprocess.PIPE, stderr=subprocess.STDOUT, shell=True)
        output.write(result.stdout.decode())
