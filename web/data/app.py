import subprocess
from ipywidgets import VBox, Label, Text, Button, Output
from IPython.display import display
# 创建输入框、按钮和输出框
input_box = Text(description='输入命令:')
output_box = Output()
button = Button(description='执行命令')

# 定义按钮点击事件的回调函数
def on_button_click(b):
    with output_box:
        output_box.clear_output() # 清空输出框
        cmd = input_box.value.strip() # 获取输入框的值并去掉首尾空格
        process = subprocess.Popen(cmd.split(), stdout=subprocess.PIPE, stderr=subprocess.STDOUT, bufsize=1, universal_newlines=True)
        for line in process.stdout:
            print(line.strip())
        process.stdout.close()
        return_code = process.wait()
        print(f'命令执行结束，返回值为 {return_code}')

# 将按钮点击事件的回调函数绑定到按钮上
button.on_click(on_button_click)

# 创建一个垂直布局并将输入框、按钮和输出框添加到其中
vbox = VBox([Label('输入要执行的命令：'), input_box, button, Label('命令输出：'), output_box])

# 显示垂直布局
display(vbox)
