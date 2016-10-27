# Image Tag
#
# Easily put an image into a Jekyll page or blog post
#
# Examples:
#   Input:
#     {% image http://path/to/image.png %}
#   Output:
#      <figure>
#        <img src='http://path/to/image.png'>
#      </figure>
#
#   Input:
#     {% image full http://path/to/image.png %}
#   Output:
#      <figure class='full'>
#        <img src="http://path/to/image.png">
#      </figure>
#
#   Input:
#     {% image http://path/to/image.png "Image caption" %}
#   Output:
#      <figure>
#        <img src="http://path/to/image.png">
#        <figcaption>Image caption</figcaption>
#      </figure>
#
#   Input:
#     {% image full http://path/to/image.png "Image caption" %}
#   Output:
#      <figure class='full'>
#        <img src="http://path/to/image.png">
#        <figcaption>Image caption</figcaption>
#      </figure>
module Jekyll
  class ImageTag < Liquid::Tag
    @url = nil
    @caption = nil
    @class = nil

    IMAGE_URL_WITH_CLASS_AND_CAPTION = /(\w+)(\s+)((https?:\/\/|\/)(\S+))(\s+)"(.*?)"/i
    IMAGE_URL_WITH_CAPTION = /((https?:\/\/|\/)(\S+))(\s+)"(.*?)"/i
    IMAGE_URL_WITH_CLASS = /(\w+)(\s+)((https?:\/\/|\/)(\S+))/i
    IMAGE_URL = /((https?:\/\/|\/)(\S+))/i

    def initialize(tag_name, markup, tokens)
      super

      if markup =~ IMAGE_URL_WITH_CLASS_AND_CAPTION
        @class   = $1
        @url     = $3
        @caption = $7
      elsif markup =~ IMAGE_URL_WITH_CAPTION
        @url     = $1
        @caption = $5
      elsif markup =~ IMAGE_URL_WITH_CLASS
        @class = $1
        @url   = $3
      elsif markup =~ IMAGE_URL
        @url = $1
      end
    end

    def render(context)
      @url = '/images' + context.registers[:page]['id'] + @url



      filename = File.basename(@url, ".*")
      extension = File.extname(@url)
      retinaUrl = File.join(File.dirname(@url), "#{filename}@2x#{extension}")

      source = @class ? "<figure class='#{@class}'>" : "<figure>"
      if File.exists?(File.join(Dir.pwd, retinaUrl))
        source += @caption ? "<img class='caption-in' src=\"#{@url}\" srcset=\"#{retinaUrl} 2x\">" :"<img src=\"#{@url}\" srcset=\"#{retinaUrl} 2x\">" 
      else
        source += @caption ? "<img class='caption-in' src=\"#{@url}\">" :"<img src=\"#{@url}\">" 
      end
      source += "<figcaption>#{@caption}</figcaption>" if @caption
      source += "</figure>"

      source
    end
  end
end

Liquid::Template.register_tag('image', Jekyll::ImageTag)
