import subprocess
import ipywidgets as widgets
from IPython.display import display, clear_output

# 创建输入框和按钮
url_box = widgets.Text(description='URL:')
download_button = widgets.Button(description='Download')

# 创建输出框
output = widgets.Output()

# 定义点击按钮的回调函数
def on_download_button_clicked(b):
    # 清空输出框
    with output:
        clear_output()
    # 获取输入框中的 URL
    url = url_box.value
    # 启动 yt-dlp 进程并捕获其输出
    with subprocess.Popen(['yt-dlp', url], stdout=subprocess.PIPE, stderr=subprocess.STDOUT, universal_newlines=True) as proc:
        # 循环读取进程输出并发送到前端显示
        for line in proc.stdout:
            with output:
                print(line.strip())
                
# 绑定按钮的回调函数
download_button.on_click(on_download_button_clicked)

# 将输入框、按钮和输出框放在一个垂直布局中
vbox = widgets.VBox([url_box, download_button, output])

# 在前端显示布局
display(vbox)
