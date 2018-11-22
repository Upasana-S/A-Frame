f= open("/home/upasana/WT2/TNT/reactions_content.html", "r")
out= open("reactions_opt.html","w")
content=f.read().replace("\n","").replace("\t","")
out.write(content)

